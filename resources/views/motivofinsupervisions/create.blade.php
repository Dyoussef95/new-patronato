@extends('index')

@section('content')
    
    <form action="/motivofinsupervisions" method="POST" role="form">
        <legend>Crear nuevo Motivo de Fin de Supervision</legend>
    
        @include('motivofinsupervisions._form')

    
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 