@extends('index')

@section('title')
    Editar Tipo de Juzgado {{ $juzgadotipo->nombre }}
@endsection

@section('content')
    
    <form action="/juzgadostipos/{{$juzgadotipo->id}}" method="POST" role="form">
        @method('PUT')
        @csrf
        <legend>Editar tipo de juzgado</legend>

        @include('juzgadostipos._form')
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
     
@endsection 