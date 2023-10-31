@extends('index')

@section('title')
    Editar nacionalidad {{ $nacionalidad->nombre }}
@endsection

@section('content')
    
    <form action="/nacionalidades/{{$nacionalidad->id}}" method="POST" role="form">
        @method('PUT')
        <legend>Editar nacionalidad</legend>

        @include('nacionalidades._form')
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
     
@endsection 