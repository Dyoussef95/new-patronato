@extends('index')

@section('content')

<a href=".." class="btn btn-warning"><i class="fas fa-arrow-left"></i> Volver</a>
    
    <form action="/oficios/administrativo" method="POST" role="form" id='form'>
        <legend>Ingresar nuevo Oficio Administrativo</legend>
        @csrf

        @include('oficios._form')

    
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 