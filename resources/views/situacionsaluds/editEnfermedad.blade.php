@extends('index')

@section('title')
    Editar Situacion Salud Enfermedad
@endsection

@section('content')
    
    <form action="/situacionsalud/enfermedad/{{$situacionSaludEnfermedad->situacion_salud_id}}/{{ $situacionSaludEnfermedad->enfermedad_id }}" method="POST" id="form" role="form">
        @method('PUT')
        @csrf
        <legend>Editar Situacion Salud Enfermedad</legend>

        @include('situacionsaluds._formEnfermedad')
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
     
@endsection 