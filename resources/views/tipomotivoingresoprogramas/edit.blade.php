@extends('index')

@section('title')
    Editar Tipo de Motivo de Ingreso al Programa {{ $tipomotivoingresoprograma->nombre }}
@endsection

@section('content')
    
    <form action="/tipomotivoingresoprogramas/{{$tipomotivoingresoprograma->id}}" method="POST" role="form">
        @method('PUT')
        @csrf
        <legend>Editar Tipo de Motivo de Ingreso al Programa</legend>

        @include('tipomotivoingresoprogramas._form')
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
     
@endsection 