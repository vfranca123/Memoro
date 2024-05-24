<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoTabaco extends Model
{
    use HasFactory;
    protected $fillable=[
        'tabacos_id',
        'img'
    ];
}
