@extends('index')

@section('title')
    Editar Trabajo {{ $trabajo->nombre }}
@endsection

@section('content')
    
    <form action="/trabajos/{{$trabajo->id}}" method="POST" role="form">
        @method('PUT')
        @csrf
        <legend>Editar trabajo</legend>

        @include('trabajos._form')
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
     
@endsection 