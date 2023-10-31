@extends('index')

@section('title')
    Editar Historia {{ $historia->nombre }}
@endsection

@section('content')
    
    <form action="/historias/{{$historia->id}}" method="POST" role="form" id="form">
        @method('PATCH')
        @csrf
        <legend>Editar historia</legend>

        @include('historias._form')
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
     
@endsection 