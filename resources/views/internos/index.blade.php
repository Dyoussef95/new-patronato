@extends('index')
@section('styles')

<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.dataTables.css') }}">
@endsection
@section('content')
@if(Auth::user()->rol()->codigo==1)
<form action="{{ route('internos.import.excel') }}" method="post" enctype="multipart/form-data">
   @csrf
   @if(Session::has('message'))
      <p>{{ Session::get('message') }}</p>
   @endif
   

   <input type="file" name="file" id="file">

   <button class="btn btn-primary">Importar</button>
  
</form>
@endif
<div class="table table-sm table-responsive">
   <table id="dataTable" name="dataTable" class="table table-hover">
      <thead class="thead-dark">
         <tr>
            <th>Apellido</th>
            <th scope="col">Nombres</th>
            <th scope="col">Numero de documento</th>
            <th scope="col">N° de legajo <!--<i onclick="sortTable(5)" style="cursor: pointer;" class="fas fa-sort">--></i>
            </th>
            <th scope="col"></th>
         </tr>
      </thead>
      <tbody>
         @foreach($internos as $interno)
         <tr
         @if($interno->historia()->first()->empleado()->first()->id==Auth::user()->empleado->id)
         class="table-primary"
         @endif
          onclick="location.href='/internos/{{$interno->id}}'" style="cursor: pointer;">
            <td>{!! $interno->apellido !!}</td>
            <td>{!! $interno->nombre !!}</td>
            <td>{!! $interno->numero_documento !!}</td>
            <td>{!! $interno->legajo !!}</td>
            <td>
            @if(in_array(Auth::user()->rol()->codigo,array(1,3)))
               <form action="/internos/{{ $interno->id}}" method="POST">
                  @method('DELETE')
                  @csrf
                
                  <input type="hidden" name="url" class="form-control" id="" value={{URL::current()}}>
                  
                  <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
               </form>
            @endif
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