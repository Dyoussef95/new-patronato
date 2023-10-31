@extends('parameters')

@section('parametersContent')
    
   <h1>Lugar de Tratamiento de Consumo</h1>

   <button type="button" class="btn btn-info" onclick="location.href='lugartratamientoconsumos/create'">Agregar Nuevo</button>
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
         @foreach($lugartratamientoconsumos as $lugartratamientoconsumo)
            <tr>
               <td>{!!$lugartratamientoconsumo->nombre!!}</td>
               <td>{!!$lugartratamientoconsumo->direccion!!}</td>
               <td>
                  <a href="lugartratamientoconsumos/{{$lugartratamientoconsumo->id}}/edit" class="btn btn-success btn-sm">Editar</a>
               </td>
               <td>
                  <form action="/lugartratamientoconsumos/{{$lugartratamientoconsumo->id}}" method="POST">
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