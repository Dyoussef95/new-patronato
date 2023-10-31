@extends('index')

@section('content')
    
    <form action="/consumos" method="POST" role="form">
        <legend>Crear nuevo Consumo</legend>
    
        @include('consumos._form')

    
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 