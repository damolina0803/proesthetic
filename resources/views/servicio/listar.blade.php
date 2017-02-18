@extends('layouts.app')
@section('titulo')
servicio
@endsection
@section('contenedor')
<table class="table table-striped b-t b-b" id="tblServicio">
 <thead>
   <tr>
     <th  style="width:20%">Nombre</th>
     <th  style="width:25%">Descripción</th>
     <th  style="width:25%">Opciones</th>
   </tr>
 </thead>
 <tbody>
 </tbody>
</table>
@endsection
@section ('script')
<script type="text/javascript">
$('#tblServicio').DataTable({
      processing: true,
      serverSide: true,
      "language": {
     "url": "/plugins/dataTables/Spanish.json"
   },

      ajax: '/servicio/get',
      columns: [
          {data: 'nombre', name: 'nombre'},
          {data: 'descripcion', name: 'descripcion'},
          {data: 'action', name: 'action', orderable: false,searchable: false}
      ]
  });
</script>
@endsection