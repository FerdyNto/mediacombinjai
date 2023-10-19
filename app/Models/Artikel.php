<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Artikel extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'judul',
        'slug',
        'body',
        'gambar',
        'user_id'
    ];

    // Relasi Artikel M - 1 User
    public function ArtikelUser()
    {
        return $this->belongsTo(User::class);
    }

    // Ubah format tanggal pada Artikel
    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('l, d F Y');
    }

    // Slug artikel
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }
}
