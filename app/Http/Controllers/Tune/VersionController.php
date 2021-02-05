<?php

namespace App\Http\Controllers\Tune;

use App\Http\Controllers\Controller;
use App\Http\Requests\VersionRequest;
use App\Models\Version;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Log;

class VersionController extends Controller
{
    public function __construct() {
        $this->middleware('project')
            ->except([]);
    }

    public function index(Request $request)
    {
        $sprints = Version::sprint($request->project->key);
        $value = [
            'project' => $request->project,
            'sprints' => $sprints
        ];
        return view('tunes.project.version.index', $value);
    }

    public function create(Request $request)
    {
        $value = [
            'project' => $request->project
        ];
        return view('tunes.project.version.create', $value);
    }

    public function store(VersionRequest $request, $key)
    {
        $data = [
            'name' => $request->name,
            'status' => $request->status,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'project_id' => $request->project->id
        ];

        $version = DB::table('versions')->insert($data);

        if ($version) {
            return redirect()
                ->route('tune.project.version', $request->project->key)
                ->withSuccess('データを登録しました。');
        } else {
            return redirect()
                ->route('tune.project.version.create', $request->project->key)
                ->withError('データの登録に失敗しました。');
        }


    }
}
