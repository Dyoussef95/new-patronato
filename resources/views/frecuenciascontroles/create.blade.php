@extends('index')

@section('content')
    
    <form action="/frecuenciascontroles" method="POST" role="form">
        <legend>Crear nueva Frecuencia de Control</legend>
    
        @include('frecuenciascontroles._form')

    
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 