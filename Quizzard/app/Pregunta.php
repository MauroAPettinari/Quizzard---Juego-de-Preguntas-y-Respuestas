<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $fillable = [
        'pregunta',
        'categoria',
        'respuestaA',
        'respuestaB',
        'respuestaCorrecta',
        'opcion',
        'valor'
    ];

    public function categoria(){
        return $this->belongsTo("App\Categoria","id");
    }
}
