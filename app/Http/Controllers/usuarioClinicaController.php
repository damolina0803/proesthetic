<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\usuarioClinica;
use App\Model\clinica;
use App\Model\preguntaCliente;
use App\Model\rol;
use Notify;


class usuarioClinicaController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    //
    return view('usuarioClinica.index');
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
    $preguntas = preguntaCliente::all();
    return view('usuarioClinica.crear', compact('clinica', 'roles', 'preguntas'));
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
    try {
      $clinica = clinica::all();
      $roles = rol::all();
      $preguntas = preguntaCliente::all();
      $input = $request->all();
      $input['password'] = bcrypt($input['password']);
      usuarioClinica::create($input);
      Notify::success("Usuario ". $input['username'] .", se registro con éxito.","Registro exitoso");
      return view('usuarioClinica.crear', compact('clinica', 'roles', 'preguntas'));
    } catch ( \Exception $e) {

      switch ($e) {
        //Excepcion de campos repetidos en la base de datos
        case '23000':
        Notify::danger("El usuario que intenta registrar: ". $e->getCode() .", ya existe.","Ooops...");
        return view('usuarioClinica.crear', compact('clinica', 'roles', 'preguntas'));
        break;

        default:
        Notify::danger("Error ". $e->getCode() .", se registro con éxito.","Registro exitoso");
        break;
      }
    }

    $clinica = clinica::all();
    $roles = rol::all();
    $preguntas = preguntaCliente::all();
    $input = $request->all();
    usuarioClinica::create($input);
    Notify::success("Usuario ". $input['username'] .", se registro con éxito.","Registro exitoso");
    return view('usuarioClinica.crear', compact('clinica', 'roles', 'preguntas'));

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
