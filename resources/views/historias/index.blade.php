@extends('index')

@section('content')
    
   <button type="button" class="btn btn-primary" onclick="location.href='historias/create'">Agregar Nuevo</button>
   <table class="table" id="tabla" style="width:auto">
      <thead>
         <tr>
            <th scope="col">Fecha Inicio</th>
            <th scope="col">Interno Legajo</th>
            <th scope="col">Regimen</th>
            <th scope="col">Delito</th>
            <th scope="col">Situacion Procesal</th>
            <th scope="col">Motivo de Ingreso al Programa</th>
            <th scope="col">Frecuencia</th>
            <th scope="col">Juzgado</th>
            <th scope="col"></th>
         </tr>
      </thead>
      <tbody>
         @foreach($historias as $historia)
            <tr>
               <td>{!! $historia->fechaInicio !!}</td>
               <td>{!! $historia->interno->legajo !!}</td>
               <td>{!! $historia->regimen->nombre !!}</td>
               <td>{!! $historia->delito_especifico->nombre !!}</td>
               <td>{!! $historia->situacion_procesal->nombre !!}</td>
               <td>{!! $historia->motivos_ingreso->nombre !!}</td>
               <td>{!! $historia->frecuencia->nombre !!}</td>
               <td>{!! $historia->juzgadoespecifico->nombre !!}</td>
               <td>
                  <a href="historias/{{ $historia->id }}/edit" class="btn btn-success btn-sm">Editar</a>
                  <br>
                  <form action="/historias/{{ $historia->id}}" method="POST">
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