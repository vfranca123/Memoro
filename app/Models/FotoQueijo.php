<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoQueijo extends Model
{
    use HasFactory;
    protected $fillable=[
        'queijos_id',
        'img'
    ];
}
