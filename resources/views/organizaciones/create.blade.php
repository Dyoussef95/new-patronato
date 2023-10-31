@extends('index')

@section('content')
    
    <form action="/organizaciones" method="POST" role="form">
        <legend>Crear nueva Organizacion</legend>
    
        @include('organizaciones._form')

    
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 