@extends('index')

@section('content')
    
    <form action="/trabajos" method="POST" role="form">
        <legend>Crear nuevo Trabajo</legend>
    
        @include('trabajos._form')

    
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 