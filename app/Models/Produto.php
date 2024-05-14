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
        'img',
        'data',
        'avaliacao_geral',
        'nota_aroma',
        'nota_sabor',
        'nota_textura',
        'nota_aparencia',
        'observacao',
        'user_id'
    ];
    use HasFactory;
}
