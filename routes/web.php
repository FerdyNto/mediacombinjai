<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardArtikelController;
use App\Http\Controllers\DashboardJabatanController;
use App\Http\Controllers\DashboardMediaCom;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::middleware(['middleware' => 'guest'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/tentang-mediacom', [ProfilController::class, 'tentangMediaCom'])->name('tentang.mediacom');
    Route::get('struktur-organisasi', [ProfilController::class, 'strukturOrganisasi'])->name('struktur.organisasi');
    Route::prefix('kelas')->group(function () {
        Route::get('/', [KelasController::class, 'index'])->name('kelas');
        Route::get('/reguler', [KelasController::class, 'reguler'])->name('kelas.reguler');
        Route::get('/profesi-satu-tahun', [KelasController::class, 'satuTahun'])->name('profesi.satu.tahun');
        Route::get('/prakerin-pkl', [KelasController::class, 'prakerin'])->name('prakerin.pkl');
    });
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
    });
});
