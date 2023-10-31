@extends('index')
@section('content')
    
    <form action="/regimen" method="POST" role="form" id="form">
        <legend>Crear nuevo Regimen</legend>
    
        @include('regimenes._form')
        
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 