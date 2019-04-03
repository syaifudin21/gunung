<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gunung extends Model
{
    protected $fillable = [
        'nama','alamat','thumbnail','deskripsi','status','publish'
    ];

    public function berita()
    {
        return $this->hasMany(Berita::class, 'gunung_id', 'id');
    }
    public function galeri()
    {
        return $this->hasMany(Galeri::class, 'gunung_id', 'id');
    }
}
