<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use File;

class ImagesController extends Controller
{
    public function upload(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $filenamewithextension = $request->file('file')->getClientOriginalName();
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        $extension = $request->file('file')->getClientOriginalExtension();
        $filenamefile = $filename.'_'.uniqid().'.'.$extension;
        $path = 'images/'.env('APP_ENV').'/';
        $request->file('file')->move($path,$filenamefile);
        return response([
            'image' => asset($path.$filenamefile)
        ], 200);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'gunung_id' => 'required'
        ]);

        $galeri = new Galeri();
        $galeri['gunung_id'] = $request->gunung_id;
        if($request->hasFile('file')){
            $upload = app('App\Helper\Images')->upload($request->file('file'), 'galeri');
            $galeri['foto'] = $upload['url'];
        }
        $galeri->save();
    }
    public function delete($id)
    {
        $galeri = Galeri::findOrFail($id);
        if (!empty($galeri)) {
            File::delete($galeri->foto);
            $galeri->delete();
            return response()->json(['kode'=>'00'], 200);
        }else{
            return response()->json(['kode'=>'01'], 200);
        }
    }
}
