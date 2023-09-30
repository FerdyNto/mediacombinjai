<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
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
            'title' => 'Register',
            'jabatan' => Jabatan::all()
        ]);
    }

    public function createUsr(Request $req)
    {
        $req->validate([
            'username' => 'required|max:16|min:5',
            'password' => 'required|min:8|max:16',
            'c-password' => 'same:password',
            'nama' => 'required',
            'jabatan' => 'required',
            'foto' => 'mimes:jpg,png,jpeg'
        ], [
            'username.required' => 'Username harus diisi',
            'username.max' => 'Username maximal 16 karakter',
            'username.min' => 'Username minimal 5 Karakter',
            'password.required' => 'Password harus diisi',
            'password.min' => 'Password minimal 8 karakter',
            'password.max' => 'Password maximal 16 karakter',
            'c-password.same' => 'Confirm password tidak sesuai',
            'nama.required' => 'Nama harus diisi',
            'jabatan.required' => 'Jabatan harus diisi',
            'foto.mimes' => 'Foto harus berekstensi: jpg, jpeg, png'
        ]);

        if ($req->file('foto')) {
            // Upload Logo Akreditasi
            $gambar_file = $req->file('foto');
            $gambar_ekstensi = $gambar_file->extension();
            $gambar_nama = 'Usr' . date('ymdhis') . '.' . $gambar_ekstensi;
            $gambar_file->move(public_path('img/profil/'), $gambar_nama);
        } else {
            $gambar_nama = '';
        }


        $user = [
            'username' => $req->input('username'),
            'password' => bcrypt($req->input('password')),
            'nama' => $req->input('nama'),
            'jabatan' => $req->input('jabatan'),
            'status' => $req->input('status'),
            'foto' => $gambar_nama
        ];

        User::create($user);
        Alert::toast('Berhasil Menambahkan Staff / Instruktur Baru', 'success');
        return redirect()->route('dashboard.users.index');
    }

    // Akun Setting
    public function userConfig($id)
    {
        return view('auth.user-config', [
            'title' => 'Akun Setting',
            'user' => User::with('userJabatan')->where('id', $id)->first(),
            'jabatan' => Jabatan::all()
        ]);
    }

    public function userConfigUpdate(Request $req, $id)
    {
        $req->validate([
            'username' => 'required|max:16|min:5',
            'nama' => 'required',
            'jabatan' => 'required'
        ], [
            'username.required' => 'Username harus diisi',
            'username.max' => 'Username maximal 16 karakter',
            'username.min' => 'Username minimal 5 Karakter',
            'nama.required' => 'Nama harus diisi',
            'jabatan.required' => 'Jabatan harus diisi'
        ]);

        $user = [
            'username' => $req->input('username'),
            'password' => bcrypt($req->input('password')),
            'nama' => $req->input('nama'),
            'jabatan' => $req->input('jabatan'),
            'status' => $req->input('status'),
        ];
        if ($req->hasFile('foto')) {
            $req->validate([
                'foto' => 'mimes:jpg,png,jpeg'
            ], [
                'foto.mimes' => 'Foto harus berekstensi: jpg, jpeg, png'
            ]);

            // Upload Logo Akreditasi
            $gambar_file = $req->file('foto');
            $gambar_ekstensi = $gambar_file->extension();
            $gambar_nama = 'Usr' . date('ymdhis') . '.' . $gambar_ekstensi;
            $gambar_file->move(public_path('img/profil/'), $gambar_nama);

            // Hapus Gambar Lama
            $data_gambar = User::where('id', $id)->first();
            File::delete(public_path('img/profil') . '/' . $data_gambar->foto);

            // Upload Gambar Baru
            $user = [
                'foto' => $gambar_nama
            ];
        }

        User::where('id', $id)->update($user);
        Alert::toast('Berhasil Ubah Profil', 'success');
        return redirect()->route('dashboard');
    }

    public function userChgPasswd()
    {
        return view('auth.user-chgPasswd', [
            'title' => 'Ubah Password'
        ]);
    }

    public function userUpdtPasswd(Request $req)
    {
        $req->validate([
            'password_lama' => 'required|current_password',
            'password_baru' => 'required|min:8|max:16',
            'c_password' => 'same:password_baru'
        ], [
            'password_lama.required' => 'Harap masukkan password lama anda!',
            'password_lama.current_password' => 'Password lama anda tidak sesuai',
            'password_baru.required' => 'Harap masukkan password yang baru',
            'password_baru.min' => 'Password minimal memiliki 8 karakter',
            'password_baru.max' => 'Password maximal memiliki 16 karakter',
            'c_password.same' => 'Konfirmasi password tidak sesuai dengan password baru'
        ]);

        $user = User::find(Auth::id());
        $user->password = bcrypt($req->input('password_baru'));
        $user->save();
        $req->session()->regenerate();

        Alert::toast('Berhasil Ubah Password ' . Auth::user()->username, 'success');
        return redirect()->route('dashboard');
    }
}
