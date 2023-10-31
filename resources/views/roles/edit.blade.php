@extends('index')

@section('title')
    Editar Regimen {{ $regiman->nombre }}
@endsection

@section('content')
    
    <form action="/regimen/{{$regiman->id}}" method="POST" id="form" role="form">
        @method('PUT')
        @csrf
        <legend>Editar regimen</legend>

        @include('regimenes._form')
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
     
@endsection 
