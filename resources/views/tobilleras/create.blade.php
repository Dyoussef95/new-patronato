@extends('index')
@section('content')
    
    <form action="/tobilleras" method="POST" role="form" id="form">
        <legend>Crear nuevo Regimen</legend>
    
        @include('tobilleras._form')
        
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 