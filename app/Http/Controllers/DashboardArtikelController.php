<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardArtikelController extends Controller
{

   public function index()
   {
      return view('dashboard.artikel.index', [
         'title' => 'Dashboard Artikel'
      ]);
   }
}
