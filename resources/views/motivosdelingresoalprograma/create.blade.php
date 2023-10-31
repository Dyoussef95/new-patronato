@extends('index')

@section('content')
    
    <form action="/motivosdelingresoalprograma" method="POST" role="form" id="form">
        <legend>Crear nuevo Motivo</legend>
    
        @include('motivosdelingresoalprograma._form')

    
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 