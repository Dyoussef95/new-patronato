@extends('index')

@section('content')
    
    <form action="/sexos" method="POST" role="form">
        <legend>Crear nuevo Genero</legend>
    
        @include('sexos._form')

    
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 