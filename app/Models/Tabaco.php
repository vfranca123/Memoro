<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabaco extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'tipo',
        'quantidade',
        'cor',
        'textura',
        'corte',
        'sabor_inicial',
        'complexidade',
        'persistência',
        'equilibrio',
        'uniformidade_da_queima',
        'velocidade_da_queima',
        'resíduos_de_queima',
        'sensação_na_boca',
        'satisfação_geral',
        'data',
        'observacao',
        'user_id'
    ];

    public function FotoTabaco(){
        return $this->hasOne(FotoTabaco::class,'tabacos_id','id');       
    }
    
    public function getImageURL(){
        if($this->FotoTabaco){
            return asset("storage/{$this->FotoTabaco->img}");
        } return null;
        
    }
}

