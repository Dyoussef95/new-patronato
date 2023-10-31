@extends('index')

@section('content')
    
    <form action="/internos" method="POST" role="form" id="form">
        <legend>Crear nuevo Asistido</legend>
    
        @include('internos._form')
        
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 



