@extends('index')

@section('title')
    Editar departamento {{ $departamento->nombre }}
@endsection

@section('content')
    
    <form action="/departamentos/{{$departamento->id}}" method="POST" role="form">
        @method('PUT')
        <legend>Editar departamento</legend>

        @include('departamentos._form')
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
     
@endsection 