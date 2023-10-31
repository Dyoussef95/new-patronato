@extends('index')

@section('title')
    Editar estado civil {{ $estadocivil->nombre }}
@endsection

@section('content')
    
    <form action="/estadosciviles/{{$estadocivil->id}}" method="POST" role="form">
        @method('PUT')
        @csrf
        <legend>Editar estado civil</legend>

        @include('estadosciviles._form')
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
     
@endsection 