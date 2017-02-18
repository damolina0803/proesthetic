<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\usuario;
use App\Model\rol;
use App\Model\pregunta;
use App\Model\clinica;


class usuarioController extends Controller
{
    public function create(){
        $preguntas = pregunta::all();   
        $roles = rol::all();
        $clinica = clinica::all();

        return view('usuario.index', compact('preguntas', 'roles','clinica'));


    }
    
    
    public function save(Request $request){
        $input = $request->all();
          $preguntas = pregunta::all();
        $roles = rol::all();
        Usuario::create($input);
        return view('usuario.index', compact('preguntas', 'roles') );
    }
}
