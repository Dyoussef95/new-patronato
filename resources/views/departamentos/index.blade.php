@extends('parameters')

@section('parametersContent')

   <h1>Departamentos</h1>
    
   <button type="button" class="btn btn-info" onclick="location.href='departamentos/create'">Agregar Nuevo</button>
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
         @foreach($departamentos as $departamento)
            <tr>
               <td>{!! $departamento -> nombre !!}</td>
               <td>
                  <a href="departamentos/{{ $departamento->id }}/edit" class="btn btn-success btn-sm">Editar</a>
               </td>
               <td>
                  <form action="/departamentos/{{ $departamento->id}}" method="POST">
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