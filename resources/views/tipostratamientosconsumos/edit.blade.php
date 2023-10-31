@extends('index')

@section('title')
    Editar tipo de tratamiento {{ $tipotratamientoconsumos->nombre }}
@endsection

@section('content')
    
    <form action="/tipostratamientosconsumos/{{$tipotratamientoconsumos->id}}" method="POST" role="form">
        @method('PUT')
        <legend>Editar tipotratamientoconsumos</legend>

        @include('tipostratamientosconsumos._form')
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
     
@endsection 