@extends('index')

@section('title')
Editar Situacion Salud Enfermedad {{ $situacionsaludenfermedad->id }}
@endsection

@section('content')

<form action="/situacionsaludenfermedads/{{$situacionsaludenfermedad->id}}" method="POST" id="form" role="form">
    @method('PUT')
    @csrf
    <legend>Editar Situacion Salud Enfermedad</legend>

    @include('situacionsaludenfermedads._form')

    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>

@endsection