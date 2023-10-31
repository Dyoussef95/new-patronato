@extends('index')

@section('content')
    
    <form action="/nacionalidades" method="POST" role="form">
        <legend>Crear nuevo Nacionalidad</legend>
    
        @include('nacionalidades._form')

    
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 