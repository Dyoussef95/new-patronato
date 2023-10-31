@extends('index')

@section('content')
    
    <form action="/caps" method="POST" role="form">
        <legend>Crear nuevo Caps</legend>
    
        @include('caps._form')

    
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 