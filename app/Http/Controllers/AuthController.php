<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginPage(Request $request)
    {
        return view('auth.login');
    }

    public function registerPage(Request $request)
    {
        return view('auth.register');
    }

    public function login(Request $request)
    {
        // Handle login logic here
        dd($request->all());
    }
}
