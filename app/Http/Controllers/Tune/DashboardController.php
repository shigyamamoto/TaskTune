<?php

namespace App\Http\Controllers\Tune;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('tunes.dashboard.index');
    }
}