<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {   
        if (Auth::check()) {
            return redirect('/');
        }else{
            return view('auth.login');
        }
    }

    public function cek_login(Request $request)
    {   
        $request->validate([
            'nik' => 'required|min:16|max:16',
            'password' => 'required'
        ]);

        $data = [
            'nik' => $request->input('nik'),
            'password' => $request->input('password')
        ];

        if(Auth::attempt($data)) {
            return redirect('/');
        } else {
            return back()->with('error', 'NIK atau password salah');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
