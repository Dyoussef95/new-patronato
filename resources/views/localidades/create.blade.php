@extends('index')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="/localidades" method="POST" role="form" id="form">
        <legend>Crear nueva Localidad</legend>
    
        @include('localidades._form')
        
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>

    
     
@endsection 
