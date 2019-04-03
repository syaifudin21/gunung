<?php

namespace App\Http\Controllers\Android;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Gunung;
use App\Http\Resources\GunungResource ;

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
    public function gunungid($id)
    {
        $gunung = Gunung::find($id);
        $berita = Berita::where(['gunung_id'=> $id, 'publish'=> 'Public'])->get();
        return response([
            'gunung' => $gunung,
            'berita' => GunungResource::collection($berita)
        ], 200);
    }
}
