<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function tentangMediaCom()
    {
        return view('profil.tentang_mediacom', [
            'title' => 'Tentang Media Com Binjai'
        ]);
    }
}
