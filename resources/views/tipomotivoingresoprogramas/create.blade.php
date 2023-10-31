@extends('index')

@section('content')
    
    <form action="/tipomotivoingresoprogramas" method="POST" role="form">
        <legend>Crear nuevo Tipo de Motivo de Ingreso al Programa</legend>
    
        @include('tipomotivoingresoprogramas._form')

    
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 