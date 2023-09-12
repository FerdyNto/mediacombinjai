<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

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
            Alert::toast('Selamat Datang ' . Auth::user()->nama, 'success');
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login')->withErrors('Username dan Password Tidak Valid');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Sampai bertemu lagi :)');
    }

    public function register()
    {
        return view('auth.register', [
            'title' => 'Register'
        ]);
    }
}
