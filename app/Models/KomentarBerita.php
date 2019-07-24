<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KomentarBerita extends Model
{
    protected $fillable = [
        'berita_id','pengunjung_id','komentar','star'
    ];

    public function berita(){
        return $this->belongsTo(Berita::class, 'berita_id', 'id');
    }
    public function pengunjung(){
        return $this->belongsTo(Pengunjung::class, 'pengunjung_id', 'id');
    }
}
