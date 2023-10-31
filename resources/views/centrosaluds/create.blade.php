@extends('index')

@section('content')
    
    <form action="/centrosaluds" method="POST" role="form">
        <legend>Crear nuevo Centro de Salud</legend>
    
        @include('centrosaluds._form')

    
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 