@extends('parameters')

@section('parametersContent')
    
   <h1>Consumos</h1>

   <button type="button" class="btn btn-info" onclick="location.href='consumos/create'">Agregar Nuevo</button>
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
         @foreach($consumos as $consumo)
            <tr>
               <td>{!! $consumo->objeto_consumo !!}</td>
               <td>
                  <a href="consumos/{{ $consumo->id }}/edit" class="btn btn-success btn-sm">Editar</a>
               </td>
               <td>
                  <form action="/consumos/{{ $consumo->id}}" method="POST">
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