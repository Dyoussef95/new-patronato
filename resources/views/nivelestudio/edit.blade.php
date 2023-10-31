@extends('index')

@section('title')
    Editar Nivel de Estudio {{ $nivelestudio->nombre }}
@endsection

@section('content')
    
    <form action="/nivelestudio/{{$nivelestudio->id}}" method="POST" role="form">
        @method('PUT')
        @csrf
        <legend>Editar nivel de estudio</legend>

        @include('nivelestudio._form')
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
     
@endsection 