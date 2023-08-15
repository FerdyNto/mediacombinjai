<?php

use App\Http\Controllers\DashboardJabatanController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/dashboard/user', function () {
    return view('dashboard.user.index');
});

Route::get('/dashboard/jabatan', function () {
    return view('dashboard.jabatan.index');
});

Route::get('/dashboard/jabatan', [DashboardJabatanController::class, 'index'])->name('/dashboard/jabatan');
Route::get('/dashboard/user', [DashboardUserController::class, 'index'])->name('/dashboard/user');