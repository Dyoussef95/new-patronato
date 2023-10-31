@extends('parameters')

@section('parametersContent')
    
<button type="button" class="btn btn-success" onclick="location.href='areas/create'">Agregar Nuevo</button>
<br><br>
<div class="table-responsive-sm">
<table class="table table-striped" id="tabla" style="width:auto">
   <thead class="thead-dark">
         <tr>
            <th scope="col">Nombre</th>
            <th scope="col"></th>
            <th scope="col"></th>
         </tr>
      </thead>
      <tbody>
         @foreach($areas as $area)
            <tr>
               <td>{!! $area -> nombre !!}</td>
               <td>
                  <a href="areas/{{ $area->id }}/edit" class="btn btn-success btn-sm">Editar</a>
               </td>
               <td>
                  <form action="/areas/{{ $area->id}}" method="POST">
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