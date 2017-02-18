<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class clinica extends Model
{
    public $table = "clinica";
    
    protected $fillable = [
        'nombre', 'telefono', 'estado', 'NIT', 'direccion', 'diaCorte', 'mesCorte', 'tipoContrato_id'
    ];
    
}
