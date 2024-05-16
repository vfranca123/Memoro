<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class PerfilController extends Controller
{
    public function index($id){
        $user = User::find($id);  
        return view('perfil.PerfilShow',compact('user') );
    }

    public function update( User $user,Request $request){
        $validated = $request->validate([
            'nome' => 'required',
            'senha' => 'required'
        ]);

        $user->update($validated);
        return redirect()->route('perfil.index',$user->id)->with('flash','Perfil editado com sucesso!');
    }

    public function updateIndex(User $user){
        return view('perfil.PerfilUpdate',compact('user') );
    }
}
