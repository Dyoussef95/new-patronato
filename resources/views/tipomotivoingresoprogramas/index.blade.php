@extends('parameters')

@section('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
@endsection

@section('scripts')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js" defer></script>
@endsection

@section('parametersContent')

   <h1 id="demo">Tipos de Motivos de Ingreso al Programa</h1>
   
   <button type="button" class="btn btn-info" onclick="location.href='tipomotivoingresoprogramas/create'">Agregar Nuevo</button>
   <br><br>
   <div class="table-responsive-sm">
   <table class="table table-striped" id="dataTable" style="width:auto">
      <thead class="thead-dark">
         <tr>
            <th scope="col">Nombre</th>
            <th scope="col"></th>
            <th scope="col"></th>
         </tr>
      </thead>
      <tbody>
         @foreach($tipomotivoingresoprogramas as $tipomotivoingresoprograma)
            <tr>
               <td>{!! $tipomotivoingresoprograma -> nombre !!}</td>
               <td>
                  <a href="tipomotivoingresoprogramas/{{ $tipomotivoingresoprograma->id }}/edit" class="btn btn-success btn-sm">Editar</a>
               </td>
               <td>
                  <form action="/tipomotivoingresoprogramas/{{ $tipomotivoingresoprograma->id}}" method="POST">
                     @method('DELETE')
                     @csrf
                     <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                  </form>                     
               </td>
            </tr>
         @endforeach
      </tbody>
   </table>


@endsection