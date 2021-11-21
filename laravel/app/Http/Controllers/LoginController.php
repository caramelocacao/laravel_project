<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function login() 
    {
        return view('HTML/connexion/login');
    }
    public function verify(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'incorrect',
        ]);
    }
    public function disconnect()
    {
        Auth::logout();

        return redirect('login');
    }
    
}