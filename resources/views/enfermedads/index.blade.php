@extends('parameters')

@section('parametersContent')
    
   <h1>Enfermedades</h1>

   <button type="button" class="btn btn-info" onclick="location.href='enfermedads/create'">Agregar Nuevo</button>
   <br><br>
   <div class="table-responsive-sm">
   <table class="table table-striped" id="tabla" style="width:auto">
      <thead class="thead-dark">
         <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
         </tr>
      </thead>
      <tbody>
         @foreach($enfermedades as $enfermedad)
            <tr>
               <td>{!! $enfermedad -> nombre !!}</td>
               <td>
                  <a href="enfermedads/{{ $enfermedad->id }}/edit" class="btn btn-success btn-sm">Editar</a>
               </td>
               <td>
                  <form action="/enfermedads/{{ $enfermedad->id}}" method="POST">
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