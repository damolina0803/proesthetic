@extends('layouts.app')

@section('titulo')
Orden de produccion
@endsection

@section('contenedor')
<div class="padding">
  <div class="row">
    <div class="col-sm-3">
      <div class="box">
        <div class="box-header">
          <a name="button" class="btn btn-link" href="/ordendeproduccion/create">Crear</a>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
        <div class="box">
          <div class="box-header">
            <a name="button" class="btn btn-link" href="#">Listar</a>
          </div>
        </div>
      </div>
  </div>
</div>
@endsection
