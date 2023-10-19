<?php

namespace App\Http\Controllers;

use App\Models\Akreditasi;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardArtikelController extends Controller
{

   public function index()
   {
      return view('dashboard.artikel.index', [
         'title' => 'Dashboard Artikel',
         'artikels' => Artikel::all()
      ]);
   }

   public function create()
   {
      return view('dashboard.artikel.create', [
         'title' => 'Tambah Artikel'
      ]);
   }

   public function store(Request $req)
   {
      $req->validate([
         'judul_artikel' => 'required',
         // 'slug' => 'required|unique:artikels',
         'body' => 'required',
         'gambar' => 'mimes:jpg,jpeg,png'
      ], [
         'judul_artikel.required' => 'Judul Artikel harus diisi!',
         // 'slug.required' => 'Slug harus terisi',
         // 'slug.unique' => 'Slug sudah digunakan',
         'body.required' => 'Isi Artikel harus ada!',
         'gambar.mimes' => 'Gambar harus berekstensi: jpg, jpeg, png'
      ]);

      // Upload Gambar Artikel
      $gambar_file = $req->file('gambar');
      $gambar_ekstensi = $gambar_file->extension();
      $gambar_nama = 'Artikel' . date('ymdhis') . '.' . $gambar_ekstensi;
      $gambar_file->move(public_path('img/artikels/'), $gambar_nama);

      if (Auth::check()) {
         $artikel = [
            'judul' => $req->input('judul_artikel'),
            // 'slug' => $req->input('slug'),
            'body' => $req->input('body'),
            'gambar' => $gambar_nama,
            'user_id' => Auth::user()->id
         ];
      } else {
         Alert::toast('Anda harus login terlebih dahulu', 'error');
      }


      Artikel::create($artikel);
      Alert::toast('Berhasil Menambahkan Artikel Baru', 'success');
      return redirect()->route('dashboard.artikel.index');
   }

   public function edit($id)
   {
      return view('dashboard.artikel.edit', [
         'title' => 'Edit Artikel',
         'artikel' => Artikel::where('id', $id)->first()
      ]);
   }

   public function update(Request $req, $id)
   {
      $req->validate([
         'judul_artikel' => 'required',
         // 'slug' => 'required',
         'body' => 'required'
      ], [
         'judul_artikel.required' => 'Judul Artikel harus diisi!',
         // 'slug.required' => 'Slug harus terisi',
         'body.required' => 'Isi Artikel harus ada!'
      ]);

      $artikel = [
         'judul' => $req->input('judul_artikel'),
         'body' => $req->input('body'),
         'user_id' => Auth::user()->id
      ];

      if ($req->hasFile('gambar')) {
         $req->validate([
            'gambar' => 'mimes:jpg,jpeg,png'
         ], [
            'gambar.mimes' => 'Gambar harus berekstensi: jpg, jpeg, png'
         ]);

         // Upload Gambar Artikel
         $gambar_file = $req->file('gambar');
         $gambar_ekstensi = $gambar_file->extension();
         $gambar_nama = 'Artikel' . date('ymdhis') . '.' . $gambar_ekstensi;
         $gambar_file->move(public_path('img/artikels/'), $gambar_nama);

         // Hapus Gambar Artikel Lama
         $data_gambar = Artikel::where('id', $id)->first();
         File::delete(public_path('img/artikels') . '/' . $data_gambar->gambar);

         // Upload File Gambar Baru
         $artikel = [
            'gambar' => $gambar_nama
         ];
      }

      Artikel::where('id', $id)->update($artikel);
      Alert::toast('Berhasil Update Artikel Lembaga', 'success');
      return redirect()->route('dashboard.artikel.index');
   }
}
