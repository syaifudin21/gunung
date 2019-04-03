<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = [
        'berita_id','pengunjung_id','chat','status'
    ];

    //
    public function berita(){
        return $this->belongsTo(Berita::class, 'berita_id', 'id');
    }

}
