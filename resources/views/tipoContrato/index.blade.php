@extends('layouts.app')

@section('titulo')
Contrato
@endsection

@section('contenedor')
<div class="padding">
  <div class="row">
    <div class="col-sm-3">
      <div class="box">
        <div class="box-header">
          <a name="button" class="btn btn-link" href="/contrato/create">Crear</a>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
        <div class="box">
          <div class="box-header">
            <a name="button" class="btn btn-link" href="/contrato/show">Listar</a>
          </div>
        </div>
      </div>
  </div>
</div>
@endsection
