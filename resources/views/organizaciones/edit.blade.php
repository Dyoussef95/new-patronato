@extends('index')

@section('title')
    Editar Organizacion {{ $organizacion->nombre }}
@endsection

@section('content')
    
    <form action="/organizaciones/{{$organizacion->id}}" method="POST" role="form">
        @method('PUT')
        @csrf
        <legend>Editar organ</legend>

        @include('organizaciones._form')
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
     
@endsection 