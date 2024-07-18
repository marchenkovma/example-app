<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        //app('view')->make('login.index');
        //view()->make('login.index');
        //View('login.index');
        return view('login.index');
    }
}
