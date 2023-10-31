@extends('index')

@section('title')
    Editar Lugar de Tratamiento de Consumo {{ $lugartratamientoconsumo->nombre }}
@endsection

@section('content')
    
    <form action="/lugartratamientoconsumos/{{$lugartratamientoconsumo->id}}" method="POST" role="form">
        @method('PATCH')
        @csrf
        <legend>Editar Lugar de Tratamiento de Consumo</legend>

        @include('lugartratamientoconsumos._form')
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
     
@endsection 