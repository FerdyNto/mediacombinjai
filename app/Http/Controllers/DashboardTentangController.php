<?php

namespace App\Http\Controllers;

use App\Models\Profil_Lembaga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DashboardTentangController extends Controller
{
    public function profil()
    {
        return view('dashboard.Tentang.profil', [
            'title' => 'Profil Lembaga',
            'data_lembaga' => Profil_Lembaga::first()
        ]);
    }

    public function updateProfil(Request $req, $id)
    {
        $req->validate([
            'profil_lembaga' => 'required',
            'sejarah_lembaga' => 'required'
        ], [
            'profil_lembaga.required' => 'Data Profil Lembaga Harus Diisi',
            'sejarah_lembaga.required' => 'Data Sejarah Lembaga Harus Diisi'
        ]);

        $data = [
            'profil_lembaga' => $req->input('profil_lembaga'),
            'sejarah_lembaga' => $req->input('sejarah_lembaga')
        ];

        // Ubah Gambar Lembaga
        if ($req->hasFile('gambar_lembaga')) {
            $req->validate([
                'gambar_lembaga' => 'mimes:jgp,png,jpeg'
            ], [
                'gambar_lembaga.mimes' => 'Gambar Harus Berekstensi : jpg, jpeg, png'
            ]);

            // Upload Gambar
            $gambar_file = $req->file('gambar_lembaga');
            $gambar_ekstensi = $gambar_file->extension();
            $gambar_nama = 'img_lembaga' . date('ymdhis') . '.' . $gambar_ekstensi;
            $gambar_file->move(public_path('img/img asset/'), $gambar_nama);

            // Hapus Gambar Lama
            $data_gambar = Profil_Lembaga::where('id', $id)->first();
            File::delete(public_path('img/img asset') . '/' . $data_gambar->gambar_lembaga);

            // Upload File Gambar Baru
            $data = [
                'gambar_lembaga' => $gambar_nama
            ];
        }

        // Ubah Foto Pimpinan
        if ($req->hasFile('foto_pimpinan')) {
            $req->validate([
                'foto_pimpinan' => 'mimes:jgp,png,jpeg'
            ], [
                'foto_pimpinan.mimes' => 'Gambar Harus Berekstensi : jpg, jpeg, png'
            ]);

            // Upload Gambar
            $gambar_file = $req->file('foto_pimpinan');
            $gambar_ekstensi = $gambar_file->extension();
            $gambar_nama = 'img_foto_pimpinan' . date('ymdhis') . '.' . $gambar_ekstensi;
            $gambar_file->move(public_path('img/img asset/'), $gambar_nama);

            // Hapus Gambar Lama
            $data_gambar = Profil_Lembaga::where('id', $id)->first();
            File::delete(public_path('img/img asset') . '/' . $data_gambar->foto_pimpinan);

            // Upload File Gambar Baru
            $data = [
                'foto_pimpinan' => $gambar_nama
            ];
        }

        Profil_Lembaga::where('id', $id)->update($data);
        return redirect()->route('dashboard.profil')->with('success', 'Berhasil Update Profil Lembaga');
    }
}
