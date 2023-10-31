@extends('parameters')

@section('parametersContent')
    
   <h1>Juzgados Especificos</h1>
   <button type="button" class="btn btn-info" onclick="location.href='juzgadosespecificos/create'">Agregar Nuevo</button>
   <br><br>
   <div class="table-responsive-sm">
   <table class="table table-striped" id="tabla" style="width:auto">
      <thead class="thead-dark">
         <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Tipo de Juzgado</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
         </tr>
      </thead>
      <tbody>
         @foreach($juzgadosespecificos as $juzgadoespecifico)
            <tr>
               <td>{!! $juzgadoespecifico->nombre !!}</td>
               <td>{!! $juzgadoespecifico->juzgadoTipo->nombre !!}</td>
               <td>
                  <a href="juzgadosespecificos/{{ $juzgadoespecifico->id }}/edit" class="btn btn-success btn-sm">Editar</a>
               </td>
               <td>
                  <form action="/juzgadosespecificos/{{ $juzgadoespecifico->id}}" method="POST">
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