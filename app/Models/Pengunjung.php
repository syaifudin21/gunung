<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pengunjung extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'username','password','alamat'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function chat()
    {
        return $this->hasMany(Chat::class, 'pengunjung_id', 'id');
    }
}
