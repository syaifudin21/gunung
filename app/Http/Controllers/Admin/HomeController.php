<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Gunung;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $beritas = Berita::all();
        $gunungs = Gunung::all();
    	return view('admin.admin-home', compact('beritas', 'gunungs'));
    }
}
