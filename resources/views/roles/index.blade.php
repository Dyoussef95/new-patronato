@extends('parameters')

@section('parametersContent')
    
   <h1>Roles</h1>
   <button type="button" class="btn btn-info" onclick="location.href='roles/create'">Agregar Nuevo</button>
   <br><br>
   <div class="table-responsive-sm">
   <table class="table table-striped" id="tabla" style="width:auto">
      <thead class="thead-dark">
         <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Codigo</th>
            <th scope="col"></th>
            <th scope="col"></th>
         </tr>
      </thead>
      <tbody>
         @foreach($roles as $rol)
            <tr>
               <td>{!! $rol->nombre !!}</td>
               <td>{!! $rol->codigo !!}</td>
               <td>
               <a href="roles/{{ $rol->id }}/edit" class="btn btn-success btn-sm">Editar</a>
               </td>
               <td>
                  <form action="/roles/{{ $rol->id}}"  method="POST">
                     @method('DELETE')
                     @csrf
                     <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
                  </form>                     
               </td>
            </tr>
         @endforeach
      </tbody>
   </table>

@endsection

