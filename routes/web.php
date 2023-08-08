<?php

use App\Http\Controllers\HomeController;
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
Route::get('/dashboard', function () {
    return view('dashboard.index');
});
