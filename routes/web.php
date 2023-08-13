<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/tentang-mediacom', [ProfilController::class, 'tentangMediaCom'])->name('tentang_mediacom');
Route::get('struktur-organisasi', [ProfilController::class, 'strukturOrganisasi'])->name('struktur_organisasi');
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas');
Route::get('/reguler', [KelasController::class, 'reguler'])->name('kelas_reguler');
Route::get('/profesi-satu-tahun', [KelasController::class, 'satuTahun'])->name('profesi_satu_tahun');

Route::get('/dashboard', function () {
    return view('dashboard.index');
});
