@extends('index')

@section('content')
    
    <form action="/departamentos" method="POST" role="form">
        <legend>Crear nuevo Departamento</legend>
    
        @include('departamentos._form')

    
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 