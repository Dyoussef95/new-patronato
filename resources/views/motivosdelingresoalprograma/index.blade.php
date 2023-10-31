@extends('parameters')

@section('parametersContent')
    
<button type="button" class="btn btn-info" onclick="location.href='motivosdelingresoalprograma/create'">Agregar Nuevo</button>
<br><br>
<div class="table-responsive-sm">
<table class="table table-striped" id="tabla" style="width:auto">
   <thead class="thead-dark">
         <tr>
            <th scope="col">Descripcion</th>
            <th scope="col">Tipo</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
         </tr>
      </thead>
      <tbody>
         @foreach($motivosdelingresoalprogramas as $motivosdelingresoalprograma)
            <tr>
               <td>{!! $motivosdelingresoalprograma->nombre !!}</td>
               <td>{{ $motivosdelingresoalprograma->tipo->nombre }}</td>
               <td>
                  <a href="motivosdelingresoalprograma/{{ $motivosdelingresoalprograma->id }}/edit" class="btn btn-success btn-sm">Editar</a>
               </td>
               <td >
                  <form action="/motivosdelingresoalprograma/{{ $motivosdelingresoalprograma->id}}" method="POST">
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