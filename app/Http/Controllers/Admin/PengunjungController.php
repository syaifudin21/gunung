<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pengunjung;

class PengunjungController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $pengunjungs = Pengunjung::all();
    	return view('admin.pengunjung', compact('pengunjungs'));
    }

    public function create()
    {
        return view('admin.pengunjung-tambah');
    }
    public function show($id)
    {
        $pengunjung = Pengunjung::find($id);
        return view('admin.pengunjung-show', compact('pengunjung'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|string',
            'username' => 'required|string|unique:pengunjungs',
            'password' => 'required|string',
        ]);

        $pengunjung = new Pengunjung();
        $pengunjung->fill($request->all());
        $pengunjung['password'] = bcrypt($request->password);
        $pengunjung->save();

        if($pengunjung){
            return back()
            ->with(['alert'=> "'title':'Berhasil','text':'Data Berhasil Disimpan', 'icon':'success','buttons': false, 'timer': 1200"]);
        }else{
            return back()
            ->with(['alert'=> "'title':'Gagal Menyimpan','text':'Data gagal disimpan, periksa kembali data inputan', 'icon':'error'"])
            ->withInput($request->all());
        }
    }
    public function edit($id)
    {
        $pengunjung = Pengunjung::findOrFail($id);
        return view('admin.pengunjung-edit', compact('pengunjung'));
    }
    public function publish()
    {
        $pengunjung = Pengunjung::find($_GET['id']);
        if ($pengunjung->publish == 'Public') {
            $pengunjung['publish'] = 'Private';
        }else{
            $pengunjung['publish'] = 'Public';
        }
        $pengunjung->save();
        return response(['kode'=> '00', 'publish' => $pengunjung->publish]);
    }
    public function update(Request $request)
    {
        $pengunjung =Pengunjung::findOrFail($request->id);
        $pengunjung['nama'] = $request->nama;
        $pengunjung['username'] = $request->username;
        $pengunjung['alamat'] = $request->alamat;
        if ($request->has('password')) {
            $pengunjung['password'] = bcrypt($request->password);
        }
        $pengunjung->save();

        if($pengunjung){
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
        $pengunjung = Pengunjung::findOrFail($id);
        if (!empty($pengunjung)) {
            $pengunjung->delete();
            return response()->json(['kode'=>'00'], 200);
        }else{
            return response()->json(['kode'=>'01'], 200);
        }
    }
}
