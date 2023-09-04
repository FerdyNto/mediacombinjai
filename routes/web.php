<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardArtikelController;
use App\Http\Controllers\DashboardJabatanController;
use App\Http\Controllers\DashboardMediaCom;
use App\Http\Controllers\DashboardTentangController;
use App\Http\Controllers\DashboardUserController;
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

// Route yang dapat di akses publik
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/tentang-mediacom', [ProfilController::class, 'tentangMediaCom'])->name('tentang.mediacom');
Route::get('struktur-organisasi', [ProfilController::class, 'strukturOrganisasi'])->name('struktur.organisasi');
Route::prefix('kelas')->group(function () {
    Route::get('/', [KelasController::class, 'index'])->name('kelas');
    Route::get('/reguler', [KelasController::class, 'reguler'])->name('kelas.reguler');
    Route::get('/profesi-satu-tahun', [KelasController::class, 'satuTahun'])->name('profesi.satu.tahun');
    Route::get('/prakerin-pkl', [KelasController::class, 'prakerin'])->name('prakerin.pkl');
});


Route::middleware(['middleware' => 'guest'])->group(function () {
    // Login
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'prosesLogin'])->name('login.proses');
});

// Route yang dapat di akses hanya oleh Admin dan Instruktur
Route::middleware(['middleware' => 'auth'])->group(function () {
    // Registrasi
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    Route::prefix('dashboard')->group(function () {
        Route::get('/', [DashboardMediaCom::class, 'index'])->name('dashboard');

        Route::get('/artikel', [DashboardArtikelController::class, 'index'])->name('dashboard.artikel');
        Route::get('/jabatan', [DashboardJabatanController::class, 'index'])->name('dashboard.jabatan');
        Route::get('/user', [DashboardUserController::class, 'index'])->name('dashboard.users');

        // Profil Lembaga
        Route::get('/profil-lembaga', [DashboardTentangController::class, 'profil'])->name('dashboard.profil');
        Route::put('/profil-lembaga/{id}', [DashboardTentangController::class, 'updateProfil'])->name('dashboard.profil.update');

        // Visi Misi
        Route::get('visi-misi', [DashboardTentangController::class, 'visiMisi'])->name('dashboard.visiMisi');
        Route::put('visi-misi/{id}', [DashboardTentangController::class, 'updateVisiMisi'])->name('dashboard.visiMisi.update');

        // Akreditasi
        Route::get('akreditasi', [DashboardTentangController::class, 'akreditasi'])->name('dashboard.akreditasi');
        Route::get('create-akreditasi', [DashboardTentangController::class, 'createAkreditasi'])->name('dashboard.akreditasi.create');
        Route::post('store-akreditasi', [DashboardTentangController::class, 'storeAkreditasi'])->name('dashboard.akreditasi.store');
        Route::get('akreditasi/{id}/edit', [DashboardTentangController::class, 'editAkreditasi'])->name('dashboard.akreditasi.edit');
        Route::put('akreditasi/{id}', [DashboardTentangController::class, 'updateAkreditasi'])->name('dashboard.akreditasi.update');
        Route::delete('akreditasi/{id}', [DashboardTentangController::class, 'destroyAkreditasi'])->name('dashboard.akreditasi.destroy');
    });
});
