@extends('index')

@section('content')
    
    <form action="/nivelestudio" method="POST" role="form">
        <legend>Crear nuevo Nivel de Estudio</legend>
    
        @include('nivelestudio._form')

    
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 