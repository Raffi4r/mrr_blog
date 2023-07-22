<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function index()
    {
        return view('auth.login');
    }

    function login(Request $request)
    {

        $request->validate(
            [
                'email'     => 'required',
                'password'  => 'required'
            ],
            [
                'email.required'    => 'Email cannot be empty',
                'password.required' => 'Password cannot be empty'
            ]
        );
        $data = [
            'email'     => $request->email,
            'password'  => $request->password
        ];

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }
        return redirect()->route('login')->with('error', 'Invalid email or password');
    }

    function logout()
    {
        Auth::logout();
        return redirect()->to('login');
    }
}
