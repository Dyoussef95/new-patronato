@extends('index')

@section('content')
    
    <form action="/tipostratamientosconsumos" method="POST" role="form">
        <legend>Crear nuevo Tipo de Tratamiento de Consumos</legend>
    
        @include('tipostratamientosconsumos._form')

    
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 