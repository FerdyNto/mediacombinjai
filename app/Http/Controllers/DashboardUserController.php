<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    public function index()
    {
        return view('dashboard.user.index', [
            'title' => 'Dashboard User',
            // 'data' => User::all() -> Tampil Semua Data
            'data' => User::paginate(5)
        ]);
    }
}
