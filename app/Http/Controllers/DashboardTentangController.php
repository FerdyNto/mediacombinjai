<?php

namespace App\Http\Controllers;

use App\Models\Akreditasi;
use App\Models\Profil_Lembaga;
use App\Models\VisiMisi;
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

    public function visiMisi()
    {
        return view('dashboard.Tentang.visimisi', [
            'title' => 'Visi & Misi',
            'visi_misi' => VisiMisi::first()
        ]);
    }

    public function updateVisiMisi(Request $req, $id)
    {
        $req->validate([
            'visi' => 'required',
            'misi' => 'required'
        ], [
            'visi.required' => 'Visi Harus Diisi',
            'misi.required' => 'Misi Harus Diisi'
        ]);

        $data = [
            'visi' => $req->input('visi'),
            'misi' => $req->input('misi')
        ];

        VisiMisi::where('id', $id)->update($data);
        return redirect()->route('dashboard.visiMisi')->with('success', 'Berhasil Update Visi dan Misi');
    }

    public function akreditasi()
    {
        return view('dashboard.Tentang.akreditasi.akreditas', [
            'title' => 'Akreditasi',
            'akreditasi' => Akreditasi::all()
        ]);
    }

    public function createAkreditasi()
    {
        return view('dashboard.Tentang.akreditasi.create', [
            'title' => 'Form Akreditasi Baru'
        ]);
    }

    public function storeAkreditasi(Request $req)
    {
        $req->validate([
            'nama_akreditasi' => 'required',
            'logo_akreditasi' => 'required|mimes:jpg,jpeg,png'
        ], [
            'nama_akreditasi.required' => 'Nama Akreditasi Harus Diisi',
            'logo_akreditasi.required' => 'Logo Akreditasi Harus Diisi',
            'logo_akreditasi.mimes' => 'Logo Akreditasi Harus Berkestensi : jpg, jpeg, png'
        ]);

        // Upload Logo Akreditasi
        $gambar_file = $req->file('logo_akreditasi');
        $gambar_ekstensi = $gambar_file->extension();
        $gambar_nama = 'Akre' . date('ymdhis') . '.' . $gambar_ekstensi;
        $gambar_file->move(public_path('img/akreditasi/'), $gambar_nama);

        $data = [
            'nama_akreditasi' => $req->input('nama_akreditasi'),
            'logo_akreditasi' => $gambar_nama
        ];

        Akreditasi::create($data);
        return redirect()->route('dashboard.akreditasi')->with('success', 'Berhasil Menambahkan Akreditasi Baru');
    }

    public function editAkreditasi($id)
    {
        return view('dashboard.Tentang.akreditasi.edit', [
            'title' => 'Form Edit Akreditasi',
            'akreditasi' => Akreditasi::where('id', $id)->first()
        ]);
    }

    public function updateAkreditasi(Request $req, $id)
    {
        $req->validate([
            'nama_akreditasi' => 'required'
        ], [
            'nama_akreditasi.required' => 'Nama Akreditasi Harus Diisi'
        ]);

        $data = [
            'nama_akreditasi' => $req->input('nama_akreditasi')
        ];

        // Ubah Gambar
        if ($req->hasFile('logo_akreditasi')) {
            $req->validate([
                'logo_akreditasi' => 'mimes:jgp,png,jpeg'
            ], [
                'logo_akreditasi.mimes' => 'Gambar Harus Berekstensi : jpg, jpeg, png'
            ]);

            // Upload Logo Akreditasi
            $gambar_file = $req->file('logo_akreditasi');
            $gambar_ekstensi = $gambar_file->extension();
            $gambar_nama = 'Akre' . date('ymdhis') . '.' . $gambar_ekstensi;
            $gambar_file->move(public_path('img/akreditasi/'), $gambar_nama);

            // Hapus Gambar Lama
            $data_gambar = Akreditasi::where('id', $id)->first();
            File::delete(public_path('img/akreditasi') . '/' . $data_gambar->logo_akreditasi);

            // Upload Gambar Baru
            $data = [
                'logo_akreditasi' => $gambar_nama
            ];
        }

        Akreditasi::where('id', $id)->update($data);
        return redirect()->route('dashboard.akreditasi')->with('success', 'Berhasil Ubah Akreditasi');
    }

    public function destroyAkreditasi($id)
    {
        // Hapus Logo Akreditasi
        $akreditasi = Akreditasi::where('id', $id)->first();
        File::delete(public_path('img/akreditasi') . '/' . $akreditasi->logo_akreditasi);

        // Hapus data
        Akreditasi::where('id', $id)->delete();
        return redirect()->route('dashboard.akreditasi')->with('success', 'Berhasil Hapus Data Akreditasi');
    }
}
