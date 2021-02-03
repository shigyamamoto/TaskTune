<?php
$title = 'プロジェクト';
?>
@extends('tunes.layouts.base')

@section('content')
    <div id="projects-content" class="container-fluid">
        <div class="row">
            <div class="col-sm-9">
                <div id="dashboard-content" class="card">
                    <div class="card-header">
                        プロジェクト
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            @if($projects->count() <= 0)
                                <p>表示するプロジェクトが存在しません</p>
                            @else
                                <ul class="project-list">
                                    @foreach($projects as $project)
                                        <li>
                                            <div class="card">
                                                <div class="card-body">
                                                    <i class="fas fa-cubes"></i> {!! link_to_route('tune.projects.summary', $project->name, ['key' => $project->key], $attributes = array('class' => 'project-link')) !!}
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <div class="card-body">
                        <h3>プロジェクト</h3>
                        <label for="closed"><input type="checkbox" name="closed" id="closed" value="1"> 終了したプロジェクトを表示</label>
                        <p><input type="submit" value="適用" class="button-small"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
