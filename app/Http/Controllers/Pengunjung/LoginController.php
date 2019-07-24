<?php

namespace App\Http\Controllers\Pengunjung;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Pengunjung;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:pengunjung')->except(['logout']);
    }
    public function form()
    {
        return view('pengunjung.pengunjung-login');
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required|min:4'
        ]);

        $credential = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if (Auth::guard('pengunjung')->attempt($credential, false)){
            if($request->has('redirect')){
                return redirect($request->redirect)->with(['alert'=> "'title':'Berhasil','text':'Data Berhasil Login', 'icon':'success','buttons': false, 'timer': 1200"]);
            }else{
                return redirect(route('pengunjung.home'))->with(['alert'=> "'title':'Berhasil','text':'Data Berhasil Login', 'icon':'success','buttons': false, 'timer': 1200"]);
            }
        }

        return back()->with(['alert'=> "'title':'Gagal Login','text':'Kombinasi Username dan Password tidak sesuai', 'icon':'error'"])->withInput($request->only('username', 'remember'));
    }
    public function daftar(Request $request)
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

        $credential = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if($pengunjung){
            if (Auth::guard('pengunjung')->attempt($credential, false)){
                if($request->has('redirect')){
                    return redirect($request->redirect)->with(['alert'=> "'title':'Berhasil','text':'Data Berhasil Daftar', 'icon':'success','buttons': false, 'timer': 1200"]);
                }else{
                    return redirect(route('pengunjung.home'))->with(['alert'=> "'title':'Berhasil','text':'Data Berhasil Daftar', 'icon':'success','buttons': false, 'timer': 1200"]);
                }
            }
        }else{
            return back()
            ->with(['alert'=> "'title':'Gagal Mendaftar','text':'Data gagal disimpan, periksa kembali data inputan', 'icon':'error'"])
            ->withInput($request->all());
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('pengunjung')->logout();
        if($request->redirect){
            return back()->with(['alert'=> "'title':'Berhasil','text':'Berhasil Logout', 'icon':'success','buttons': false, 'timer': 1200"]);
        }else{
            return redirect('/pengunjung');
        }
    }
}
