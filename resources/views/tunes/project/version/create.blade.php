<?php
$title = 'バージョン';
?>
@extends('tunes.layouts.project')

@section('content')
    <div id="versions-content" class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <div id="version-content" class="card">
                    <div class="card-header">
                        <div class="d-flex bd-highlight">
                            <div class="me-auto bd-highlight">バージョン作成</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                    {{ Form::model($project, ['route' => ['tune.project.version.store', $project->key]]) }}
                                    @include('tunes.project.version._form')
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-outline-primary">保存</button>
                                            {{ link_to_route('tune.project.version', '一覧へ戻る', [ 'key' => $project->key ], ['class' => 'btn btn-outline-secondary']) }}
                                        </div>
                                    </div>
                                    {{ Form::close() }}
                                </div>
                                <div class="col-sm">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
