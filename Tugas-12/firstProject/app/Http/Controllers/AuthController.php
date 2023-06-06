<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function welcome()
    {
        $page = [
            'title' => 'Welcome'
        ];

        return view('welcome', $page);
    }

    function register()
    {
        $page = [
            'title' => 'Register'
        ];

        return view('register', $page);
    }
}
