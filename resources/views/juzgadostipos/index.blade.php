@extends('parameters')

@section('parametersContent')
    <H1>Tipos de Juzgados</H1>
    <button type="button" class="btn btn-info" onclick="location.href='juzgadostipos/create'">Agregar Nuevo</button>
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
         @foreach($juzgadostipos as $juzgadotipo)
            <tr>
               <td>{!! $juzgadotipo -> nombre !!}</td>
               <td>
                  <a href="juzgadostipos/{{ $juzgadotipo->id }}/edit" class="btn btn-success btn-sm">Editar</a>
               </td>
               <td>
                  <form action="/juzgadostipos/{{ $juzgadotipo->id}}" method="POST">
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