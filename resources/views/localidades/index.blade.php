@extends('parameters')

@section('parametersContent')
    
   <h1>Localidades</h1>

   <button type="button" class="btn btn-info" onclick="location.href='localidades/create'">Agregar Nuevo</button>
   <br><br>
   <div class="table-responsive-sm">
   <table class="table table-striped" id="tabla" style="width:auto;">
      <thead class="thead-dark">
         <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Departamento</th>
            <th scope="col">Codigo Postal</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
         </tr>
      </thead>
      <tbody>
         @foreach($localidades as $localidad)
            <tr>
               <td>{!! $localidad->nombre !!}</td>
               <td><span class="label label-success">{!! $localidad->departamento->nombre !!}</span></td>
               <td>{!! $localidad->codigo_postal !!}</td>
               <td>
                  <a href="localidades/{{ $localidad->id }}/edit" class="btn btn-success btn-sm">Editar</a>
               </td>
               <td>
                  <form action="/localidades/{{ $localidad->id}}" method="POST">
                     @method('DELETE')
                     @csrf
                     <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                  </form>                     
               </td>
            </tr>
         @endforeach
      </tbody>
   </table>
   </div>

@endsection