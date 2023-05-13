<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate (Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Login berhasil
            return redirect()->intended('/');
        } else {
            return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
