@extends('index')

@section('content')
    
    <form action="/areas" method="POST" role="form">
        <legend>Crear nueva Area</legend>
    
        @include('areas._form')

    
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 