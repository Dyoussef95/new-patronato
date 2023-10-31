@extends('index')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.dataTables.css') }}">

<style>





</style>

@endsection

@section('content')
   <h1><a href="./oficios" class="btn btn-warning"><i class="fas fa-arrow-left"></i> Oficios</a> Mesa de Entrada: Asistidos</h1> 
   
    <table id="dataTableMesaEntrada" name="dataTableMesaEntrada" class="table table-hover table-fixed">
      <thead class="thead-dark">
         <tr>
            <th>Legajo</th>  
            <th>Apellidos</th>
            <th>Nombres</th>
            <th>Profesional</th>
         </tr>
      </thead>
      <tbody>
         @foreach($internos as $interno)
         <tr>
            <td >{!! $interno->legajo !!}</td>
            <td>{!! $interno->apellido !!}</td>
            <td>{!! $interno->nombre !!}</td>
            <td>{!! $interno->historia()->first()->empleado()->first()->apellido !!} {!! $interno->historia()->first()->empleado()->first()->nombre !!}</td>
         </tr>
         @endforeach
      </tbody>
   </table>
@endsection

@section('scripts')

<script src="{{ asset('js/jquery.dataTables.js') }}" defer></script>

<script src="{{ asset('js/mesaEntrada.js') }}" defer></script>

@endsection
