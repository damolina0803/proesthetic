<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    public $table = "usuario";
    
    protected $fillable = [
        'usuario', 'nombre', 'apellido', 'clave', 'pregunta_id', 'respuesta',
        'rol_id'
    ];
}
