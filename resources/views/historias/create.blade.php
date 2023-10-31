@extends('index')

@section('content')
    
    <form action="/historias" method="POST" role="form" id="form">
        <legend>Crear nueva Historia</legend>
    
        @include('historias._form')

    
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 