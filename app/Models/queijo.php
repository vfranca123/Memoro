<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class queijo extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'tipo',
        'quantidade',
        'avaliacao_geral',
        'textura',
        'aparencia',
        'aroma',
        'sabor',
        'sensação_na_boca',
        'sonoridade',
        'observacao',
        'user_id'
    ];

    public function FotoQueijo(){
        return $this->hasOne(FotoQueijo::class,'queijos_id','id');       
    }
    
    public function getImageURL(){
        if($this->FotoQueijo){
            return asset("storage/{$this->FotoQueijo->img}");
        } return null;
        
    }
}


