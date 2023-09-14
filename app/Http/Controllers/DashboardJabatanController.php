<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardJabatanController extends Controller
{
    public function index()
    {
        $title = 'Hapus Jabatan!';
        $text = "Yakin ingin hapus jabatan ini?";
        confirmDelete($title, $text);
        return view('dashboard.jabatan.index', [
            'title' => 'Dashboard Jabatan',
            'jabatan' => Jabatan::all()
        ]);
    }

    public function create()
    {
        return view('dashboard.jabatan.create', [
            'title' => 'Form Jabatan Baru'
        ]);
    }

    public function store(Request $req)
    {
        $req->validate([
            'nama_jabatan' => 'required',
            'tipe_jabatan' => 'required|in:Admin,Instruktur'
        ], [
            'nama_jabatan.required' => 'Nama Jabatan Harus Diisi',
            'tipe_jabatan.required' => 'Tipe Jabatan Harus Dipilih',
            'tipe_jabatan.in' => 'Tipe Jabatan Harus Berupa Admin atau Instruktur'
        ]);

        $data = [
            'nama_jabatan' => $req->input('nama_jabatan'),
            'tipe_jabatan' => $req->input('tipe_jabatan')
        ];

        Jabatan::create($data);
        Alert::toast('Berhasil Menambahkan Jabatan Baru', 'success');
        return redirect()->route('dashboard.jabatan.index');
    }

    public function edit($id)
    {
        return view('dashboard.jabatan.edit', [
            'title' => 'Form Edit Jabatan',
            'jabatan' => Jabatan::where('id', $id)->first()
        ]);
    }

    public function update(Request $req, $id)
    {
        $req->validate([
            'nama_jabatan' => 'required',
            'tipe_jabatan' => 'required|in:Admin,Instruktur'
        ], [
            'nama_jabatan.required' => 'Nama Jabatan Harus Diisi',
            'tipe_jabatan.required' => 'Tipe Jabatan Harus Dipilih',
            'tipe_jabatan.in' => 'Tipe Jabatan Harus Berupa Admin atau Instruktur'
        ]);

        $data = [
            'nama_jabatan' => $req->input('nama_jabatan'),
            'tipe_jabatan' => $req->input('tipe_jabatan')
        ];

        Jabatan::where('id', $id)->update($data);
        Alert::toast('Berhasil Update Jabatan', 'success');
        return redirect()->route('dashboard.jabatan.index');
    }

    public function destroy($id)
    {
        Jabatan::where('id', $id)->delete();
        Alert::toast('Berhasil Hapus Jabatan', 'success');
        return redirect()->route('dashboard.jabatan.index');
    }
}
