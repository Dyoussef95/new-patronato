@extends('parameters')

@section('parametersContent')
    
   <h1>Delitos Especificos</h1>
   <button type="button" class="btn btn-info" onclick="location.href='delitoespecificos/create'">Agregar Nuevo</button>
   <br><br>
   <div class="table-responsive-sm">
   <table class="table table-striped" id="tabla" style="width:auto">
      <thead class="thead-dark">
         <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Tipo</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
         </tr>
      </thead>
      <tbody>
         @foreach($delitoespecificos as $delitoespecifico)
            <tr>
               <td>{!! $delitoespecifico->nombre !!}</td>
               <td><span class="label label-success">{!! $delitoespecifico->tipos_delitos->nombre !!}</span></td>
               <td>
                  <a href="delitoespecificos/{{ $delitoespecifico->id }}/edit" class="btn btn-success btn-sm">Editar</a>
               </td>
               <td>
                  <form action="/delitoespecificos/{{ $delitoespecifico->id}}" method="POST">
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