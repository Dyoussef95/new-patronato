@extends('index')

@section('content')
    
    <form action="/lugartratamientoconsumos" method="POST" role="form">
        <legend>Crear nuevo Lugar de Tratamiento de Consumos</legend>
    
        @include('lugartratamientoconsumos._form')

    
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 