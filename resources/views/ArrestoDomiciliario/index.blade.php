@extends('index')
@section('styles')

<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.dataTables.css') }}">
@endsection
@section('content')
<button type="button" class="btn btn-primary" onclick="location.href='internos/create'">Agregar Nuevo</button>
<br><br>
<!--<input type="text" id="myInput" onkeyup="search()" placeholder="Buscar..">
<h4>Buscar por:</h4>
<input type="radio" name="selection" checked value="0"> Apellido
<input type="radio" name="selection" value="1"> Nombre
<input type="radio" name="selection" value="2"> N° Documento
<input type="radio" name="selection" value="3"> Localidad
<input type="radio" name="selection" value="4"> Trabajo
<input type="radio" name="selection" value="5"> Legajo
<div>Cantidad:<b id="cant"></b></div>-->
<div class="table-responsive">
   <table id="dataTable" name="dataTable" class="table table-hover">
      <thead class="thead-dark">
         <tr>
            <th>Apellido</th>
            <th scope="col">Nombres</th>
            <th scope="col">Numero de documento</th>
            <th scope="col">N° de legajo <!--<i onclick="sortTable(5)" style="cursor: pointer;" class="fas fa-sort">--></i>
            </th>
            <th scope="col"></th>
            <th scope="col"></th>
         </tr>
      </thead>
      <tbody>
         @foreach($internos as $interno)
         <tr onclick="location.href='/internos/{{$interno->id}}'" style="cursor: pointer;">
            <td onclick="location.href='/internos/{{$interno->id}}'">{!! $interno->apellido !!}</td>
            <td>{!! $interno->nombre !!}</td>
            <td>{!! $interno->numero_documento !!}</td>
            <td>{!! $interno->legajo !!}</td>
            <td>
               <a href="internos/{{ $interno->id }}/edit" class="btn btn-success btn-sm m-0">Editar</a>
            </td>
            <td>
               <form action="/internos/{{ $interno->id}}" method="POST">
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

@section('scripts')

<script src="{{ asset('js/jquery.dataTables.js') }}" defer></script>
@endsection