<?php

namespace App\Http\Controllers\Pengunjung;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
            return redirect()->intended(route('pengunjung.home'));
        }

        return redirect()->back()->withInput($request->all());
    }

    public function logout(Request $request)
    {
        Auth::guard('pengunjung')->logout();
        return redirect('/');
    }
}
