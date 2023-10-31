@extends('index')

@section('title')
    Editar Situacion Procesal {{ $situacionprocesal->nombre }}
@endsection

@section('content')
    
    <form action="/situacionesprocesales/{{$situacionprocesal->id}}" method="POST" role="form">
        @method('PUT')
        @csrf
        <legend>Editar Situacion Procesal</legend>

        @include('situacionesprocesales._form')
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
     
@endsection 