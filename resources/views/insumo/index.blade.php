@extends('layouts.app')
@section('titulo')
Insumo
@endsection
@section('contenedor')
<div class="padding">
  <div class="row">
    <div class="col-sm-3">
      <div class="box">
        <div class="box-header">
          <a name="button" class="btn btn-link" href="/insumo/create">Crear</a>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
        <div class="box">
          <div class="box-header">
            <a name="button" class="btn btn-link" href="insumo/show">Listar</a>
          </div>
        </div>
      </div>
  </div>
</div>
@endsection
