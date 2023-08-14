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
            'title' => 'Reguler/Privat'
        ]);
    }

    public function satuTahun()
    {
        return view('kelas.satu_tahun', [
            'title' => 'Profesi 1 Tahun'
        ]);
    }

    public function prakerin()
    {
        return view('kelas.prakerin', [
            'title' => 'PRAKERIN / PKL'
        ]);
    }
}
