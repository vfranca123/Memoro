<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FolloweController extends Controller
{
    public function follow($user){
        
        $follower =auth()->user();

        $follower->followings()->attach($user); // é adicionado a data base

        return redirect()->route('perfil.index',$user)->with('flash','seguido com sucesso');
    }

    public function unfollow($user){
        $follower =auth()->user();

        $follower->followings()->detach($user); // é tirado da data base 

        return redirect()->route('perfil.index',$user)->with('flash','deixou de seguido com sucesso');
    }
}
