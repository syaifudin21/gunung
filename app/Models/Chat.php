<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = [
        'admin_id','pengunjung_id','chat'
    ];

    //
    public function berita(){
        return $this->belongsTo(Berita::class, 'berita_id', 'id');
    }

}
