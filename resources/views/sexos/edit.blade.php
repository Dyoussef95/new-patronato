@extends('index')

@section('title')
    Editar Genero {{ $sexo->nombre }}
@endsection

@section('content')
    
    <form action="/sexos/{{$sexo->id}}" method="POST" role="form">
        @method('PATCH')
        @csrf
        <legend>Editar Genero</legend>

        @include('sexos._form')
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
     
@endsection 