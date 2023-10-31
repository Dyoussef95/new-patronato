@extends('index')

@section('content')
    
    <form action="/estadosciviles" method="POST" role="form">
        <legend>Crear nuevo EstadoCivil</legend>
    
        @include('estadosciviles._form')

    
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 