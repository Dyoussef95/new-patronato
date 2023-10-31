@extends('parameters')

@section('parametersContent')
    
   <h1>Regimenes</h1>
   <button type="button" class="btn btn-info" onclick="location.href='regimen/create'">Agregar Nuevo</button>
   <br><br>
   <div class="table-responsive-sm">
   <table class="table table-striped" id="tabla" style="width:auto">
      <thead class="thead-dark">
         <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Area</th>
            <th scope="col"></th>
            <th scope="col"></th>
         </tr>
      </thead>
      <tbody>
         @foreach($regimenes as $regimen)
            <tr>
               <td>{!! $regimen->nombre !!}</td>
               <td>{!! $regimen->area->nombre !!}</td>
               <td>
               <a href="regimen/{{ $regimen->id }}/edit" class="btn btn-success btn-sm">Editar</a>
               </td>
               <td>
                  <form action="/regimen/{{ $regimen->id}}"  method="POST">
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

