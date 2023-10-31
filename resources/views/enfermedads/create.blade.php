@extends('index')

@section('content')
    
    <form action="/enfermedads" method="POST" role="form">
        <legend>Crear nueva Enfermedad</legend>
    
        @include('enfermedads._form')

    
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 