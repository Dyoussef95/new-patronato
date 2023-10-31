@extends('index')

@section('title')
    Editar Centro de Salud {{ $centrosalud->nombre }}
@endsection

@section('content')
    
    <form action="/centrosaluds/{{$centrosalud->id}}" method="POST" role="form">
        @method('PATCH')
        @csrf
        <legend>Editar Centro de Salud</legend>

        @include('centrosaluds._form')
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
     
@endsection 