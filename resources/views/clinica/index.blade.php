@extends('layouts.app') @section('titulo') Clínica @endsection @section('contenedor') 
<div class="box">
    <div class="box-header">
        <h2>Registrar</h2>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-sm-4 offset-sm-4">
                <form data-ui-jp="parsley" novalidate="" method="post" action="/clinica/crear">
                {{csrf_field()}}
                    <div class="form-group">
                        <label>NIT</label>
                        <input class="form-control" required="" data-parsley-id="136" type="text" name="NIT" maxlength="10">
                    </div>
                    <div class="form-group">
                        <label>Nombre</label>
                        <input class="form-control" required="" data-parsley-id="136" type="text" name="nombre">
                    </div>

                    <div class="form-group">
                        <label>Dirección</label>
                        <input class="form-control" required="" data-parsley-id="138" type="text" name="direccion">
                    </div>
                    <div class="form-group">
                        <label>Tipo Contrato</label>
                        <select class="form-control c-select" name="tipoContrato_id">
                                @foreach($clinica as $value)
                                <option value="{{$value->id}}"> {{$value->nombre}}</option>
                                @endforeach
                            </select>
                       
                    </div>
                    <div class="form-group">
                        <label>Teléfono</label>
                        <input class="form-control" required="" data-parsley-id="138" type="phone" name="telefono">
                    </div>
                    <div class="row m-b">
                        <div class="col-sm-6">
                            <label>Día corte</label>
                            <input class="form-control" required="" id="pwd" data-parsley-id="140" type="number" name="diaCorte">
                        </div>
                        <div class="col-sm-6">
                            <label>Mes corte</label>
                            <input class="form-control" required="" id="pwd" data-parsley-id="140" type="number" name="mesCorte">
                        </div>
                    </div>
                    <div class=" p-a text-center">
                        <button type="submit" class="btn info">Registrar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>




@endsection