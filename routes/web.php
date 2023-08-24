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

Route::get('/', [HomeController::class, 'index']);
Route::get('/tentang-mediacom', [ProfilController::class, 'tentangMediaCom'])->name('tentang_mediacom');
Route::get('struktur-organisasi', [ProfilController::class, 'strukturOrganisasi'])->name('struktur_organisasi');
Route::prefix('kelas')->group(function () {
    Route::get('/', [KelasController::class, 'index'])->name('kelas');
    Route::get('/reguler', [KelasController::class, 'reguler'])->name('kelas_reguler');
    Route::get('/profesi-satu-tahun', [KelasController::class, 'satuTahun'])->name('profesi_satu_tahun');
    Route::get('/prakerin-pkl', [KelasController::class, 'prakerin'])->name('prakerin_pkl');
});

// Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::get('/dashboard', [DashboardMediaCom::class, 'index'])->name('dashboard');

Route::get('/dashboard/artikel', [DashboardArtikelController::class, 'index'])->name('dashboard_artikel');
Route::get('/dashboard/jabatan', [DashboardJabatanController::class, 'index'])->name('dashboard_jabatan');
Route::get('/dashboard/user', [DashboardUserController::class, 'index'])->name('dashboard_users');
