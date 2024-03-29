<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pengunjung extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'nama','username','password','alamat'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function chat()
    {
        return $this->hasMany(Chat::class, 'pengunjung_id', 'id');
    }

    public function komentar()
    {
        return $this->hasMany(KomentarBerita::class, 'pengunjung_id', 'id');
    }

    public function berita()
    {
        return $this->hasMany(Berita::class, 'pengunjung_id', 'id');
    }
    
}
