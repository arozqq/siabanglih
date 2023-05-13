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
            'nik.required' => 'NIK wajib diisi',
            'nik.min:16' => 'NIK harus berisi 16 Angka',
            'nik.max:16' => 'NIK maksimal 16 angka',
            'password.required' => 'Kolom Password wajib diisi',
        ]);

        $data = [
            'nik' => $request->input('nik'),
            'password' => $request->input('password')
        ];
        

        if(Auth::attempt($data)) {
            $user = auth()->user()->id;
            $update_user = User::find($user);
            $update_user->update([
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
