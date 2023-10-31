@extends('index')

@section('content')
    
    <form action="/parentezcos" method="POST" role="form">
        <legend>Crear nuevo Parentezco</legend>
    
        @include('parentezcos._form')

    
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 