<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Foto;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request){
        $validate= request()->validate([
            'comentario'=>'Required|min:1|max:250'
        ]);
        
        $validate['user_id']=auth()->id(); 

        
        $Post = new Post();
        $Post->user_id=auth()->id();// validando o usuario dono da ideia
        $Post->content=Request()->get('comentario','');
        $Post->likes=0;
        $Post->save(); 

         // Verificar se uma imagem foi enviada no request
        if ($request->hasFile('img')) {
            // Armazenar a nova imagem
            $imagePath = request()->file('img')->store('Fotos', 'public');
            // Criar um novo registro de perfil de imagem
            Foto::create([
                'post_id' => $Post->id,
                'img' => $imagePath
            ]);
        }
        
        return redirect()->route('Homepage.index')->with('flash', 'Post feito com sucesso');
    }

    
}
