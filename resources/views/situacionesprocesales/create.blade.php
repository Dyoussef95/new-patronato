@extends('index')

@section('content')
    
    <form action="/situacionesprocesales" method="POST" role="form">
        <legend>Crear nueva Situacion Procesal</legend>
    
        @include('situacionesprocesales._form')

    
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 