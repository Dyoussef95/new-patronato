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

    <form action="/situacionsaludenfermedads" method="POST" role="form" id="form">
        <legend>Agregar nueva Enfermedad</legend>
    
        @include('situacionsaludenfermedads._form')
        
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 

