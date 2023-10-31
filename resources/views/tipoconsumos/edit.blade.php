@extends('index')

@section('title')
    Editar Tipo de Consumo {{ $tipoconsumo->nombre }}
@endsection

@section('content')
    
    <form action="/tipoconsumos/{{$tipoconsumo->id}}" method="POST" role="form">
        @method('PATCH')
        @csrf
        <legend>Editar Tipo de Consumo</legend>

        @include('tipoconsumos._form')
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
     
@endsection 