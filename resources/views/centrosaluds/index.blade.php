@extends('parameters')

@section('parametersContent')
    
   <h1>Centro de Salud</h1>

   <button type="button" class="btn btn-info" onclick="location.href='centrosaluds/create'">Agregar Nuevo</button>
   <br><br>
   <div class="table-responsive-sm">
   <table class="table table-striped" id="tabla" style="width:auto">
      <thead class="thead-dark">
         <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Direccion</th>
            <th scope="col"></th>
            <th scope="col"></th>
         </tr>
      </thead>
      <tbody>
         @foreach($centrosaluds as $centrosalud)
            <tr>
               <td>{!!$centrosalud->nombre!!}</td>
               <td>{!!$centrosalud->direccion!!}</td>
               <td>
                  <a href="centrosaluds/{{$centrosalud->id}}/edit" class="btn btn-success btn-sm">Editar</a>
               </td>
               <td>
                  <form action="/centrosaluds/{{$centrosalud->id}}" method="POST">
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