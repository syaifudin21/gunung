<?php

namespace App\Http\Controllers\Android;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Gunung;
use App\Http\Resources\GunungResource ;
use Illuminate\Support\Facades\Auth;
use DB;


class Homecontroller extends Controller
{
    public function index()
    {
        $beritas = Berita::where('publish', 'Public')->select('id','judul','text_pembuka')->orderBy('id', 'DESC')->limit(10)->get();
        $gunungs = Gunung::where('publish', 'Public')->select('id','nama','thumbnail', 'alamat')->paginate(5);
        return response([
            'berita' => GunungResource::collection($beritas),
            'gunung' => GunungResource::collection($gunungs)
        ], 200);
    }

    public function berita()
    {
        $beritas = Berita::where('beritas.publish', 'Public')
                    ->join('gunungs', 'beritas.gunung_id', '=', 'gunungs.id')
                    ->select('gunungs.nama as gunung', 'gunungs.alamat', 'beritas.*')
                    ->orderBy('id', 'DESC')
                    ->get();
        return $beritas;
    }

    public function gunung()
    {
        $gunungs = Gunung::where('publish', 'Public')
                    ->select('id','nama','thumbnail', 'alamat', 'status', 'thumbnail')
                    ->get();
        return $gunungs;
    }

    public function beritaid($id)
    {
        $berita = Berita::findOrFail($id);
        return $berita;
    }
    public function gunungid($id)
    {
        $gunung = Gunung::findOrFail($id);
        return $gunung;
    }
    public function viewberita($id)
    {
        dd(Auth::guard());
        $berita = Berita::findOrFail($id);
        return view('android.beritaid', compact('berita'));
    }
    public function viewgunung($id)
    {
        $gunung = Gunung::findOrFail($id);
        return view('android.gunungid', compact('gunung'));
    }

}
