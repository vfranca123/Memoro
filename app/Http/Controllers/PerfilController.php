<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class PerfilController extends Controller
{
    public function index($id){
        $user=User::find($id);  
        $posts=Post::orderBy('created_at', 'DESC');
        $posts= $posts->where('user_id','like','%'.$id.'%'); 

        return view('perfil.PerfilShow',
        [
            'user'=>$user,
            'posts'=> $posts->paginate(5)
        ]);
        
    }

    public function update( User $user,Request $request){
        $validated = $request->validate([
            'nome' => 'required|max:26',
            'senha' => 'required'
        ]);

        $user->update($validated);
        return redirect()->route('perfil.index',$user->id)->with('flash','Perfil editado com sucesso!');
    }

    public function updateIndex(User $user){
        return view('perfil.PerfilUpdate',compact('user') );
    }
}
