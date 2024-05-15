<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    protected $fillable=[
        'nome',
        'tipo',
        'marca',
        'safra',
        'quantidade',
        'data',
        'avaliacao_geral',
        'nota_aroma',
        'nota_sabor',
        'nota_textura',
        'nota_aparencia',
        'observacao',
        'user_id'
    ];
    
    public function FotoProduto(){
        return $this->hasOne(FotoProduto::class,'produto_id','id');       
    }
    
    public function getImageURL(){
        if($this->FotoProduto){
            return asset("storage/{$this->FotoProduto->img}");
        }
        
    }
    use HasFactory;
}   
