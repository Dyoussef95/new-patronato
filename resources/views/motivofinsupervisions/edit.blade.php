@extends('index')

@section('title')
    Editar Motivo de Fin de Supervision{{ $motivofinsupervision->nombre }}
@endsection

@section('content')
    
    <form action="/motivofinsupervisions/{{$motivofinsupervision->id}}" method="POST" role="form">
        @method('PATCH')
        @csrf
        <legend>Editar Motivo de Fin de Supervision</legend>

        @include('motivofinsupervisions._form')
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
     
@endsection 