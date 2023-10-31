@extends('index')

@section('content')
    
    <form action="/situacionsaluds" method="POST" role="form" id="form">
    <legend>Crear nueva Situacion de Salud de {{$interno->apellido}} {{$interno->nombre}}</legend>
    
        @include('situacionsaluds._form')
        
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 

