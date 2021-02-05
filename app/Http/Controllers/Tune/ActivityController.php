<?php

namespace App\Http\Controllers\Tune;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function __construct() {
        $this->middleware('project')
            ->except([]);
    }

    public function index(Request $request)
    {
        $value = [
            'project' => $request->project
        ];
        return view('tunes.project.activity.index', $value);
    }
}
