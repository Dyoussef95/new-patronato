@extends('Index')


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
    
    <form action="/situacionsalud/enfermedad/{{ $situacionSalud->id }}" method="POST" role="form" id="form">
        <legend>Agregar nueva Enfermedad</legend>
    
        @include('situacionsaluds._formEnfermedad')
        
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 