@extends('Index')


@section('content')
    
    <form action="/juzgadosespecificos" method="POST" role="form" id="form">
        @csrf
        <legend>Crear nuevo Juzgado Especifico</legend>
    
        @include('juzgadosespecificos._form')
        
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 

