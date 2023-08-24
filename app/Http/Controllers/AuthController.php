<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login', [
            'title' => 'Login'
        ]);
    }

    public function prosesLogin(Request $req)
    {
        $login = $req->validate([
            'username' => 'required',
            'password' => 'required'
        ], [
            'username.required' => 'Username Harus Diisi',
            'password.required' => 'Password Harus Diisi'
        ]);

        // Otentikasi
        if (Auth::attempt($login)) {
            return redirect()->route('dashboard')->with('success', 'Selamat Datang' . Auth::user()->nama);
        } else {
            return redirect()->route('login')->withErrors('Username dan Password Tidak Valid');
        }
    }

    public function register()
    {
        return view('auth.register', [
            'title' => 'Register'
        ]);
    }
}
