@extends('index')

@section('title')
    Editar Frecuencia de Control {{ $frecuenciacontrol->nombre }}
@endsection

@section('content')
    
    <form action="/frecuenciascontroles/{{$frecuenciacontrol->id}}" method="POST" role="form">
        @method('PUT')
        @csrf
        <legend>Editar frecuencia de control</legend>

        @include('frecuenciascontroles._form')
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
     
@endsection 