@extends('index')

@section('title')
    Editar parentezco {{ $parentezco->nombre }}
@endsection

@section('content')
    
    <form action="/parentezcos/{{$parentezco->id}}" method="POST" role="form">
        @method('PATCH')
        @csrf
        <legend>Editar parentezco</legend>

        @include('parentezcos._form')
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
     
@endsection 