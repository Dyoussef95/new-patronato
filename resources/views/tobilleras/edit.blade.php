@extends('index')

@section('title')
    Editar Tobillera {{ $tobillera->nombre }}
@endsection

@section('content')
    
    <form action="/tobilleras/{{$tobillera->id}}" method="POST" id="form" role="form">
        @method('PUT')
        @csrf
        <legend>Editar Tobillera</legend>

        @include('tobilleras._form')
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
     
@endsection 
