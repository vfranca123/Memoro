<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoCafes extends Model
{
    use HasFactory;
    protected $fillable=[
        'cafe_id',
        'img'
    ];
}
