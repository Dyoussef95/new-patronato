@extends('index')

@section('title')
    Editar Situacion Salud Consumo
@endsection

@section('content')
    
    <form action="/situacionsalud/consumo/{{$situacionSaludConsumo->situacion_salud_id}}/{{ $situacionSaludConsumo->consumo_id }}" method="POST" id="form" role="form">
        @method('PUT')
        @csrf
        <legend>Editar Situacion Salud Consumo</legend>

        @include('situacionsaluds._formConsumo')
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
     
@endsection 