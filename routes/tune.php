<?php

use Illuminate\Support\Facades\Route;

// Dashboard(ダッシュボード)
Route::get('/dashboard', 'DashboardController')->name('dashboard');
// Projects(プロジェクト一覧)
Route::get('/projects', 'ProjectController@index')->name('project');

// Summary(概要)
Route::get('/projects/{key}', 'ProjectController@summary')->name('project.summary');
// Activity(活動)
Route::get('/projects/{key}/activity', 'ActivityController@index')->name('project.activity');
// Version(バージョン)
Route::get('/projects/{key}/version', 'VersionController@index')->name('project.version');
Route::get('/projects/{key}/version/create', 'VersionController@create')->name('project.version.create');
Route::post('/projects/{key}/version/store', 'VersionController@store')->name('project.version.store');
// Backlog(バックログ)
Route::get('/projects/{key}/backlog', 'BacklogController@index')->name('project.backlog');
// Kanban(かんばん)
Route::get('/projects/{key}/kanban', 'KanbanController@index')->name('project.kanban');
// Issue(チケット)
Route::get('/projects/{key}/issue', 'IssueController@index')->name('project.issue');
