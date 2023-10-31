@extends('index')

@section('content')
    
    <form action="/tipoconsumos" method="POST" role="form">
        <legend>Crear nuevo Tipo de Consumo</legend>
    
        @include('tipoconsumos._form')

    
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 