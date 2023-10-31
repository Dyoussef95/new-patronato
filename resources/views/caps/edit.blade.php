@extends('index')

@section('title')
    Editar caps {{ $caps->nombre }}
@endsection

@section('content')
    
    <form action="/caps/{{$caps->id}}" method="POST" role="form">
        @method('PUT')
        @csrf
        <legend>Editar caps</legend>

        @include('caps._form')
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
     
@endsection 