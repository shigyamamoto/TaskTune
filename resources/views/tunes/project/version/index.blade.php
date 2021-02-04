<?php
$title = 'バージョン';
?>
@extends('tunes.layouts.project')

@section('content')
    <div id="versions-content" class="container-fluid">
        <div class="row">
            <div class="col-sm-9">
                <div id="version-content" class="card">
                    <div class="card-header">
                        <div class="d-flex bd-highlight">
                            <div class="me-auto bd-highlight">バージョン</div>
                            <div class="bd-highlight create">
                                <a href="{{ route('tune.project.version.create', ['key' => $project->key]) }}">
                                    <i class="fas fa-plus-circle"></i> 新規バージョンを作成
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @foreach( $sprints as $sprint )
                            <div class="sprint">
                                <div class="sprint-title">
                                    <a class="version-name" href="#">
                                        <i class="fas fa-tag"></i> {{ $sprint->name }}[{{ $sprint->point }}pt]
                                    </a>
                                </div>
                                <div class="sprint-date">
                                    開始日:{{ $sprint->start_date_format }} &nbsp; 終了日:{{ $sprint->end_date_format }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div id="version-navi" class="card">
                    <div class="card-body">
                        @foreach( $sprints as $sprint )
                            <div>{{ $sprint->name }}</div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
