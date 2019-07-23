<?php

namespace App\Http\Controllers\Pengunjung;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gunung;
use File;

class GunungController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:pengunjung');
    }
    public function index()
    {
        $gunungs = Gunung::paginate(20);
    	return view('pengunjung.gunung', compact('gunungs'));
    }
    public function show($id)
    {
        $gunung = Gunung::find($id);
        return view('pengunjung.gunung-show', compact('gunung'));
    }
}
