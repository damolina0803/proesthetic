<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use App\Model\clinica;
use App\Model\personaClinica;
use App\Model\pregunta;
use App\Model\rol;
use Notify;


class usuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('usuario.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $clinica = clinica::all();
        $roles = rol::all();
        $preguntas = pregunta::all();
        return view('usuario.crear', compact('clinica', 'roles', 'preguntas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $clinica = clinica::all();
        $roles = rol::all();
        $preguntas = pregunta::all();
        $input = $request->all();
        $usuario =User::create([ "usuario"=>$input["username"], "password"=>bcrypt($input["password"]), "rol_id"=>$input["rol_id"],
        "pregunta_id"=>$input["pregunta_id"], "respuesta"=>$input["respuesta"]
      ]);
        $id_usuario = $usuario->id;

        personaClinica::create([ "cedula"=>$input["cedula"], "nombre"=>$input["nombre"], "apellido"=>$input["apellido"],
        "clinica_id"=>$input["clinica_id"], "usuario_id"=>$id_usuario
       ]);

        Notify::success("Usuario ". $input['username'] .", se registro con éxito.","Registro exitoso");
        return view('usuario.crear', compact('clinica', 'roles', 'preguntas'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
