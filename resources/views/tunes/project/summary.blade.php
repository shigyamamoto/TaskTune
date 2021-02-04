<?php
$title = '概要';
?>
@extends('tunes.layouts.project')

@section('content')
    <div id="projects-content" class="container-fluid">
        <div class="row">
            <div class="col-sm-9">
                <div id="dashboard-content" class="card">
                    <div class="card-header">
                        概要
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <div class="card-body">
                        <h3>プロジェクト</h3>
                        <label for="closed"><input type="checkbox" name="closed" id="closed" value="1">
                            終了したプロジェクトを表示</label>
                        <p><input type="submit" value="適用" class="button-small"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
