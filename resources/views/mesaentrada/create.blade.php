@extends('index')

@section('content')


    <!--Muestra mensajes de errores de validacion-->
    
    <h1><a href="." class="btn btn-warning"><i class="fas fa-arrow-left"></i> Volver</a> INGRESAR NUEVO ASISTIDO</h1>
    <h2>Nuevo N° legajo: {{$nuevoLegajo}}</h2>
    <h3>Ingresar datos del tutelado/a:</h3>
    <form action="/ingreso-nuevo" method="POST" role="form" id="form">
        @csrf        
    
        @include('mesaentrada._form')
        
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>

    
     
@endsection 

