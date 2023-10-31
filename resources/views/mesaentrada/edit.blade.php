@extends('index')

@section('content')


    
    <legend>EDITAR ASISTIDO {{$historia->interno->nombre}} {{ $historia->interno->apellido}}</legend>
    <legend>Datos del tutelado/a:</legend>
    <form action="/historias/{{$historia->id}}" method="POST" role="form" id="form">
        @method('PATCH')
        @csrf
        
        @include('mesaentrada._form')
        
        
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>

    
     
@endsection 