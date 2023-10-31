@extends('index')

@section('content')
    
    <form action="/situacioneslaborales" method="POST" role="form">
        <legend>Crear nueva Situacion Laboral</legend>
    
        @include('situacioneslaborales._form')

    
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 