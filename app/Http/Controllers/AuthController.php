<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login()
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ])->onlyInput('email');

        if (Auth::attempt($credetials)) {
            return redirect()->intended('/barangs')->with('success', 'Berhasil login!');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('success', 'Berhasil logout!');
    }
}
