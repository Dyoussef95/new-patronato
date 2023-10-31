@extends('index')

@section('title')
    Editar Delito Especifico {{ $delitoespecifico->nombre }}
@endsection

@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
    
    <form action="/delitoespecificos/{{$delitoespecifico->id}}" method="POST" id="form" role="form">
        @method('PUT')
        @csrf
        <legend>Editar delito especifico</legend>

        @include('delitoespecificos._form')
    
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
     
@endsection 

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
@endsection