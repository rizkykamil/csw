<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard');
        } else {
            $user = User::where('email', $request->email)->first();

            if ($user) {
                // Email ditemukan tetapi password salah
                return redirect()->back()->withErrors(['password' => 'password salah']);
            } else {
                // Email tidak ditemukan
                return redirect()->back()->withErrors(['email' => 'email tidak ditemukan']);
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function register()
    {
        return view('admin.register');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            // 'username' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:255',
            // 'confirm_password' => 'required|same:password',
        ],);
        User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/login')->with('success', 'Data berhasil ditambahkan');
    }
}
