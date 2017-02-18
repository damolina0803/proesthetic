<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class pregunta extends Model
{
    public $table = "pregunta_empleado";
    
    protected $fillable = ['pregunta'];
    
    public $timestamp =  false;
}
