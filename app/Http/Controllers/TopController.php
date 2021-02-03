<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TopController extends Controller
{
    public function index()
    {
        // ログイン状態ならリダイレクトする
        if(Auth::check()){
            return redirect()->route('tune.dashboard');
        }

        return view('top');
    }
}
