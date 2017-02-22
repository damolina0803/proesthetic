<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    public $table = "usuario_clinica";

    protected $fillable = [
        'username', 'password', 'rol_id', 'pregunta_id', 'respuesta'
    ];
}
