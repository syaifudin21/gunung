<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = [
        'gunung_id','judul','text_pembuka','berita','lampiran','publish'
    ];

    //
    public function gunung(){
        return $this->belongsTo(Gunung::class, 'gunung_id', 'id');
    }
    public function chat()
    {
        return $this->hasMany(Chat::class, 'berita_id', 'id');
    }
}
