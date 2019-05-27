<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $users = Admin::all();
    	return view('admin.admin', compact('users'));
    }

    public function create()
    {
        return view('admin.admin-tambah');
    }
    public function show($id)
    {
        $admin = Admin::find($id);
        return view('admin.admin-show', compact('Admin'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed|alpha_num',
        ]);

        $admin = new Admin();
        $admin['username'] = $request['username'];
        $admin['password'] = Hash::make($request['password']);
        $admin->save();

        if($admin){
            return redirect(route('admin.user'))
            ->with(['alert'=> "'title':'Berhasil','text':'Data Berhasil Disimpan', 'icon':'success','buttons': false, 'timer': 1200"]);
        }else{
            return back()
            ->with(['alert'=> "'title':'Gagal Menyimpan','text':'Data gagal disimpan, periksa kembali data inputan', 'icon':'error'"])
            ->withInput($request->all());
        }
    }
    public function edit($id)
    {
        $user = Admin::findOrFail($id);
        return view('admin.admin-edit', compact('user'));
    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed|alpha_num',
        ]);

        $admin =Admin::findOrFail($request->id);
        $admin['username'] = $request['username'];
        $admin['password'] = Hash::make($request['password']);
        $admin->save();

        if($admin){
            return redirect(route('admin.user'))
            ->with(['alert'=> "'title':'Berhasil','text':'Data Berhasil Disimpan', 'icon':'success','buttons': false, 'timer': 1200"]);
        }else{
            return back()
            ->with(['alert'=> "'title':'Gagal Menyimpan','text':'Data gagal disimpan, periksa kembali data inputan', 'icon':'error'"])
            ->withInput($request->all());
        }
    }
    public function delete($id)
    {
        $admin = Admin::findOrFail($id);
        if (!empty($admin)) {
            $admin->delete();
            return response()->json(['kode'=>'00'], 200);
        }else{
            return response()->json(['kode'=>'01'], 200);
        }
    }
}
