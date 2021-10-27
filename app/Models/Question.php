<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'respuesta1',
        'respuesta2',
        'respuesta3',
        'respuesta4',
        'respuesta5',
        'respuesta6',
        'respuesta7',
        'respuesta8',
        'respuesta9',
        'respuesta10'
    ];
}


