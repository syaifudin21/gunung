<?php

namespace App\Http\Controllers\Pengunjung;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Support\Facades\Auth;
use App\Models\KomentarBerita;

class BeritaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:pengunjung');
    }
    public function index()
    {
        $beritas = Berita::where('pengunjung_id', Auth::user()->id)->get();
    	return view('pengunjung.berita', compact('beritas'));
    }

    public function create()
    {
        return view('pengunjung.berita-tambah');
    }
    public function show($id)
    {
        $berita = Berita::find($id);
        return view('pengunjung.berita-show', compact('berita'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required|string|max:255',
            'text_pembuka' => 'required|string',
            'berita' => 'required|string',
            'lampiran' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $berita = new Berita();
        $berita->fill($request->all());
        if($request->hasFile('lampiran')){
            $upload = app('App\Helper\Images')->upload($request->file('lampiran'), 'berita');
            $berita['lampiran'] = $upload['url'];
        }
        $berita['pengunjung_id'] = Auth::user()->id;
        $berita->save();

        if($berita){
            return redirect(route('pengunjung.berita.show',['id'=> $berita->id]))
            ->with(['alert'=> "'title':'Berhasil','text':'Data Berhasil Disimpan', 'icon':'success','buttons': false, 'timer': 1200"]);
        }else{
            return back()
            ->with(['alert'=> "'title':'Gagal Menyimpan','text':'Data gagal disimpan, periksa kembali data inputan', 'icon':'error'"])
            ->withInput($request->all());
        }
    }
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('pengunjung.berita-edit', compact('berita'));
    }
    public function publish()
    {
        $berita = Berita::find($_GET['id']);
        if ($berita->publish == 'Public') {
            $berita['publish'] = 'Private';
        }else{
            $berita['publish'] = 'Public';
        }
        $berita->save();
        return response(['kode'=> '00', 'publish' => $berita->publish]);
    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required|string|max:255',
            'text_pembuka' => 'required|string',
            'berita' => 'required|string',
            'lampiran' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $berita =Berita::findOrFail($request->id);
        $berita->fill($request->all());
        if($request->hasFile('lampiran')){
            $upload = app('App\Helper\Images')->upload($request->file('lampiran'), 'berita');
            $berita['lampiran'] = $upload['url'];
        }
        $berita->save();

        if($berita){
            return redirect($request->redirect)
            ->with(['alert'=> "'title':'Berhasil','text':'Data Berhasil Disimpan', 'icon':'success','buttons': false, 'timer': 1200"]);
        }else{
            return back()
            ->with(['alert'=> "'title':'Gagal Menyimpan','text':'Data gagal disimpan, periksa kembali data inputan', 'icon':'error'"])
            ->withInput($request->all());
        }
    }
    public function delete($id)
    {
        $berita = Berita::findOrFail($id);
        if (!empty($berita)) {
            $berita->delete();
            return response()->json(['kode'=>'00'], 200);
        }else{
            return response()->json(['kode'=>'01'], 200);
        }
    }
    public function komentarstore(Request $request)
    {
        $this->validate($request, [
            'komentar' => 'required|string',
        ]);

        $komentar = new KomentarBerita();
        $komentar->fill($request->all());
        $komentar['pengunjung_id'] = Auth::user()->id;
        $komentar->save();

        if($komentar){
            return back()
            ->with(['alert'=> "'title':'Berhasil','text':'Komentar berhasil dikirim', 'icon':'success','buttons': false, 'timer': 1200"]);
        }else{
            return back()
            ->with(['alert'=> "'title':'Gagal Menyimpan','text':'Komentar gagal dikirim, periksa kembali data inputan', 'icon':'error'"])
            ->withInput($request->all());
        }
    }
}
