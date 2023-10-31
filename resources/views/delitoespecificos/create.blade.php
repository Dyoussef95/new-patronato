@extends('index')
@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
    
    <form action="/delitoespecificos" method="POST" role="form" id="form">
        <legend>Crear nuevo Delito Especifico</legend>
    
        @include('delitoespecificos._form')
        
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
@endsection