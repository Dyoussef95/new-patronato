@extends('index')

@section('content')
    
    <form action="/juzgadostipos" method="POST" role="form">
        <legend>Crear nuevo Tipo de Juzgado</legend>
    
        @include('juzgadostipos._form')

    
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 