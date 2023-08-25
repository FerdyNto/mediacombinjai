<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function tentangMediaCom()
    {
        return view('profil.tentang_mediacom', [
            'title' => 'Tentang Media Com Binjai'
        ]);
    }

    public function strukturOrganisasi()
    {
        return view('profil.struktur_organisasi_mediacom', [
            'title' => "Struktur Organisasi Media Com Binjai",
            'user' => User::all()
        ]);
    }
}
