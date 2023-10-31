@extends('index')

@section('title')
    Editar Tipo de Delito {{ $tipodelito->nombre }}
@endsection

@section('content')
    
    <form action="/tipodelitos/{{$tipodelito->id}}" method="POST" role="form">
        @method('PUT')
        @csrf
        <legend>Editar Tipo de Delito</legend>

        @include('tipodelitos._form')
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
     
@endsection 