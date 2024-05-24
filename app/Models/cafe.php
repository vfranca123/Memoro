<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cafe extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'tipo',
        'safra',
        'quantidade',
        'data',
        'aceitação_global',
        'aparencia',
        'aroma',
        'sabor',
        'textura',
        'observacao',
        'user_id'
    ];

    public function FotoCafes(){
        return $this->hasOne(FotoCafes::class,'cafe_id','id');       
    }
    
    public function getImageURL(){
        if($this->FotoCafes){
            return asset("storage/{$this->FotoCafes->img}");
        } return null;
        
    }
}
