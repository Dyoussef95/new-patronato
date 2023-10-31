@extends('index')

@section('title')
    Editar motivo {{ $motivosdelingresoalprograma->nombre }}
@endsection

@section('content')
    
    <form action="/motivosdelingresoalprograma/{{$motivosdelingresoalprograma->id}}" method="POST" id="form" role="form">
        @method('PUT')
        @csrf
        <legend>Editar motivo</legend>

        @include('motivosdelingresoalprograma._form')
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
     
@endsection 