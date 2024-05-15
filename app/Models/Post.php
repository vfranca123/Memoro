<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'user_id',
        'likes'
    ];


    public function foto(){
        return $this->hasOne(Foto::class,'post_id','id');       
    }

    public function getImageURL(){
        if($this->foto){
            return asset("storage/{$this->foto->img}");
        }else{
            return '';
        }
        
    }

    public function links($post){
        return view('post.postCard',['post'=>$post]);
    } 

    public function getDono(){
        $user = User::find($this->user_id);   
        return $user;
    }
}
