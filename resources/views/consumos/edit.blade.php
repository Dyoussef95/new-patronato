@extends('index')

@section('title')
    Editar Consumo {{ $consumo->nombre }}
@endsection

@section('content')
    
    <form action="/consumos/{{$consumo->id}}" method="POST" role="form">
        @method('PATCH')
        @csrf
        <legend>Editar Consumo</legend>

        @include('consumos._form')
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
     
@endsection 