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
    
    public function foto(){
        return $this->hasOne(Foto::class,'post_id','id');       
    }
    
    use HasFactory;
}   
