@extends('index')

@section('content')
    
    <form action="/tipodelitos" method="POST" role="form">
        <legend>Crear nueva Tipo de Delito</legend>
    
        @include('tipodelitos._form')

    
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 