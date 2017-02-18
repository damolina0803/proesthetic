@extends('layouts.app') @section('titulo') Servicio @endsection @section('contenedor')
<div class="box">
  <div class="box-body">
    <div class="row">
      <div class="col-sm-4 offset-sm-4">
        <form data-ui-jp="parsley" novalidate="" method="post" action="/servicio">
          {{csrf_field()}}
          <div class="form-group">
            <label>Nombre</label>
            <input class="form-contr2ol" required="" data-parsley-id="136" type="text" name="nombre">
          </div>
          <div class="form-group">
            <label>Descripción</label>
            <textarea name="descripcion" class="form-control" rows="8" cols="80"></textarea>
          </div>
          <div class=" p-a text-center">
            <button type="submit" class="btn info">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
