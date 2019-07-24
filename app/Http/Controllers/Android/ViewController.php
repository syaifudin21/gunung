<?php

namespace App\Http\Controllers\Android;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Support\Facades\Auth;
use App\Models\KomentarBerita;

class ViewController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:pengunjung');
    // }
    public function viewberita($id)
    {
        $berita = Berita::find($id);
        return view('android.beritaid', compact('berita'));
    }
}
