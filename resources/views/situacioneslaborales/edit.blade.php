@extends('index')

@section('title')
    Editar Situacion Laboral {{ $situacionlaboral->nombre }}
@endsection

@section('content')
    
    <form action="/situacioneslaborales/{{$situacionlaboral->id}}" method="POST" role="form">
        @method('PUT')
        @csrf
        <legend>Editar Situacion Laboral</legend>

        @include('situacioneslaborales._form')
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
     
@endsection 