@extends('index')

@section('title')
    Editar Genero {{ $enfermedad->nombre }}
@endsection

@section('content')
    
    <form action="/enfermedads/{{$enfermedad->id}}" method="POST" role="form">
        @method('PATCH')
        @csrf
        <legend>Editar Genero</legend>

        @include('enfermedads._form')
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
     
@endsection 