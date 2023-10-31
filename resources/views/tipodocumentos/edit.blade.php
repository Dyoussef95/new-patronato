@extends('index')

@section('title')
    Editar Tipo de Documento {{ $tipodocumento->nombre }}
@endsection

@section('content')
    
    <form action="/tipodocumentos/{{$tipodocumento->id}}" method="POST" role="form">
        @method('PUT')
        @csrf
        <legend>Editar Tipo de Documento</legend>

        @include('tipodocumentos._form')
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
     
@endsection 