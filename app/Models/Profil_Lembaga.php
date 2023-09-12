<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil_Lembaga extends Model
{
    use HasFactory;

    protected $fillable = ['gambar_lembaga', 'profil_lembaga', 'sejarah_lembaga', 'foto_pimpinan'];
}
