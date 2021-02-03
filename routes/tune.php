<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', 'DashboardController')->name('dashboard');
Route::get('/projects', 'ProjectController@index')->name('projects');
Route::get('/projects/{key}', 'ProjectController@summary')->name('projects.summary');