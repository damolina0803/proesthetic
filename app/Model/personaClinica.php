<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class personaClinica extends Model
{
    public $table = "persona_clinica";

    protected $fillable = ['cedula', 'nombre', 'apellido', 'clinica_id', 'usuario_id'];
}
