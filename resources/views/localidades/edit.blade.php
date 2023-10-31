@extends('index')

@section('title')
    Editar Localidad {{ $localidad->nombre }}
@endsection

@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
    
    <form action="/localidades/{{$localidad->id}}" method="POST" id="form" role="form">
        @method('PUT')
        @csrf
        <legend>Editar localidad</legend>

        @include('localidades._form')
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
     
@endsection 

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
@endsection