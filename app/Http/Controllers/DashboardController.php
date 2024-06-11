<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('login');
    }

    public function homepage(){

        $posts=Post::orderBy('created_at', 'DESC');
        
        if(request()->has('seachPerfil')){
             $posts= $posts->where('nomeAutor','like','%'.request()->get('seachPerfil').'%'); 
        }

        if(request()->has('seach')){
            $posts= $posts->where('content','like','%'.request()->get('seach').'%'); 
       }
        
        return view('homePage',[
            'posts'=> $posts->paginate(5)
        ]);
    }
}
