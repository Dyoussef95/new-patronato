@extends('index')

@section('content')
    
   <button type="button" class="btn btn-primary" onclick="location.href='tobilleras/create'">Agregar Nuevo</button>
   <table class="table" id="tabla" style="width:auto">
      <thead>
         <tr>
            <th scope="col">Numero de TUC</th>
            <th scope="col">Nombre interno</th>
            <th scope="col"></th>
         </tr>
      </thead>
      <tbody>
         @foreach($tobilleras as $tobillera)
            <tr>
               <td>{!! $tobillera->numeroTuc !!}</td>
               <td><span class="label label-success">{!! $tobillera->historia->interno->apellido !!}</span></td>
               <td>
                  <a href="tobilleras/{{ $tobillera->id }}/edit" class="btn btn-success btn-sm">Editar</a>
                  <br>
                  <form action="/tobilleras/{{ $tobillera->id}}" method="POST">
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