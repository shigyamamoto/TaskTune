<?php

namespace App\Http\Controllers\Tune;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Version;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct() {
        $this->middleware('project')
            ->except(['index']);
    }

    public function index()
    {
        $projects = Project::enabled()->get();
        return view('tunes.project.index', compact('projects'));
    }

    public function summary(Request $request)
    {
        $value = [
            'project' => $request->project
        ];
        return view('tunes.project.summary', $value);
    }

    public function activity(Request $request)
    {
        $value = [
            'project' => $request->project
        ];
        return view('tunes.project.activity', $value);
    }

    public function version(Request $request)
    {
        $sprints = Version::sprint($request->project->key);
        $value = [
            'project' => $request->project,
            'sprints' => $sprints
        ];
        return view('tunes.project.version.index', $value);
    }

    public function version_create(Request $request)
    {
        $value = [
            'project' => $request->project
        ];
        return view('tunes.project.version.create', $value);
    }

    public function version_store(Request $request)
    {
        $value = [
            'project' => $request->project
        ];
        return redirect()->route('tune.project.version', $project->key);
    }


    public function backlog(Request $request)
    {
        $value = [
            'project' => $request->project
        ];
        return view('tunes.project.backlog', $value);
    }

    public function kanban(Request $request)
    {
        $value = [
            'project' => $request->project
        ];
        return view('tunes.project.kanban', $value);
    }

    public function issue(Request $request)
    {
        $value = [
            'project' => $request->project
        ];
        return view('tunes.project.issue', $value);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
