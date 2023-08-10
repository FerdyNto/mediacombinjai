<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        return view('kelas.index', [
            'title' => 'Kelas'
        ]);
    }

    public function reguler()
    {
        return view('kelas.reguler', [
            'title' => 'Kelas Reguler/Privat'
        ]);
    }
}
