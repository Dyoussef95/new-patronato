@extends('index')

@section('title')
    Editar Cumplimiento {{ $cumplimiento->nombre }}
@endsection



@section('content')
    
    <form action="/cumplimientos/{{$cumplimiento->id}}" method="POST" id="form" role="form">
        @method('PUT')
        @csrf
        <legend>Editar Cumplimiento</legend>

        @include('cumplimientos._form')
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
     
@endsection 

