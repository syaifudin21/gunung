<?php

namespace App\Http\Controllers\Pengunjung;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Gunung;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:pengunjung');
    }
    public function index()
    {
        $beritas = Berita::all();
        $gunungs = Gunung::all();
    	return view('pengunjung.pengunjung-home', compact('beritas', 'gunungs'));
    }
}
