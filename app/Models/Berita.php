<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = [
        'gunung_id','pengunjung_id','judul','text_pembuka','berita','lampiran','publish'
    ];

    //
    public function gunung(){
        return $this->belongsTo(Gunung::class, 'gunung_id', 'id');
    }
    public function pengunjung(){
        return $this->belongsTo(Pengunjung::class, 'pengunjung_id', 'id');
    }
    public function komentar()
    {
        return $this->hasMany(KomentarBerita::class, 'berita_id', 'id');
    }
}
