<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', 'DashboardController')->name('dashboard');

// プロジェクト
Route::get('/projects', 'ProjectController@index')->name('project');
Route::get('/projects/{key}', 'ProjectController@summary')->name('project.summary');
Route::get('/projects/{key}/activity', 'ProjectController@activity')->name('project.activity');
Route::get('/projects/{key}/version', 'ProjectController@version')->name('project.version');
Route::get('/projects/{key}/version/create', 'ProjectController@version_create')->name('project.version.create');
Route::post('/projects/{key}/version/store', 'ProjectController@version_store')->name('project.version.store');
Route::get('/projects/{key}/backlog', 'ProjectController@backlog')->name('project.backlog');
Route::get('/projects/{key}/kanban', 'ProjectController@kanban')->name('project.kanban');
Route::get('/projects/{key}/issue', 'ProjectController@issue')->name('project.issue');
