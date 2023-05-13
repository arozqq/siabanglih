<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $request)
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
        ], [
            'nik.required' => 'Kolom NIK harus diisi',
            'nik.numeric' => 'Kolom NIK harus berisi nilai numerik',
            'nik.min' => 'Kolom NIK harus memiliki panjang minimal 16 karakter',
            'nik.max' => 'Kolom NIK harus memiliki panjang maksimal 16 karakter',
            'password.required' => 'Kolom Password wajib diisi',
        ]);

        $data = [
            'nik' => $request->input('nik'),
            'password' => $request->input('password')
        ];
        

        if(Auth::attempt($data)) {
            $user = auth()->user()->id;
            $update_user = User::findOrFail($user);
            $update_user->save([
                'last_login_at' => now(),
                'last_login_ip' => $request->ip()
            ]);
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
