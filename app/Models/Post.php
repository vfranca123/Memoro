<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'comentario',
        'user_id',
    ];


    public function foto(){
        return $this->hasOne(Foto::class,'post_id','id');       
    }

    public function getImageURL(){
        if($this->ftPerfil){
            return asset("storage/{$this->ftPerfil->img}");
        }
        else{
            return 'https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario';
        }
    }
}
