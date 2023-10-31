@extends('index')

@section('content')
    
    <form action="/tipodocumentos" method="POST" role="form">
        <legend>Crear nuevo Tipo de Documento</legend>
    
        @include('tipodocumentos._form')

    
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 