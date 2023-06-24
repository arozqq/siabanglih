<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VotingController extends Controller
{
    public function index()
    {
        $kandidat = Kandidat::orderBy('nama_kandidat')->where('status', 1)->get();
        $total = count($kandidat);
        return view('voting.index', compact('kandidat', 'total'));
    }

    public function store(Request $request)
    {   
        $request->validate([
            'votes' => 'required|array|min:9|max:9'
        ], [
            'votes.required' => 'Silahkan pilih beberapa kandidat terlebih dahulu',
            'votes.array' => 'Terjadi kesalahan silahkan dicoba lagi',
            'votes.min' => 'Silahkan pilih minimal 9 Kandidat',
            'votes.max' => 'Batas memilih maximal 9 Kandidat',
        ]);

        $user_login = auth()->user()->id;
        $user_submit = User::find($user_login);
        if($user_submit->submited === 1) {
            return back()->with("error", "Maaf, anda sudah memberikan suara");
        }
        $user_submit->submited = 1;
        $user_submit->save();

        $user = new User;
        $user->id = $user_login;
        $user->save;
        
        $user->kandidats()->sync($request->votes);
        
      
        return back()->with('success', 'Terimakasih sudah memberikan suara anda');
    }
}
