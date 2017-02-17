<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\usuario;
use App\Model\rol;
use App\Model\pregunta;

class usuarioController extends Controller
{
    public function create(){
        $preguntas = pregunta::all();
        $roles = rol::all();
        return view('usuario.index', compact('preguntas', 'roles'));
    }
    
    
    public function save(Request $request){
        $input = $request->all();
          $preguntas = pregunta::all();
        $roles = rol::all();
        Usuario::create($input);
        return view('usuario.index', compact('preguntas', 'roles') );
    }
}
