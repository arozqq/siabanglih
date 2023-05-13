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
        $kandidat = Kandidat::get();
        return view('voting.index', compact('kandidat'));
    }

    public function store(Request $request)
    {   
        $request->validate([
            'votes' => 'required|array|min:13|max:13'
        ], [
            'votes.required' => 'Silahkan pilih beberapa kandidat terlebih dahulu',
            'votes.array' => 'Terjadi kesalahan silahkan dicoba lagi',
            'votes.min' => 'Silahkan pilih minimal 13 Kandidat',
            'votes.max' => 'Batas memilih maximal 13 Kandidat',
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
