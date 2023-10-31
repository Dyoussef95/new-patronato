@extends('parameters')

@section('parametersContent')

   <h1>Parentezcos</h1>

   <button type="button" class="btn btn-info" onclick="location.href='parentezcos/create'">Agregar Nuevo</button>
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
         @foreach($parentezcos as $parentezco)
            <tr>
               <td>{!! $parentezco -> nombre !!}</td>
               <td>
                  <a href="parentezcos/{{ $parentezco->id }}/edit" class="btn btn-success btn-sm">Editar</a>
               </td>
               <td>
                  <form action="/parentezcos/{{ $parentezco->id}}" method="POST">
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