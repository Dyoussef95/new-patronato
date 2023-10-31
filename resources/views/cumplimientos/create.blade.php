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
    
    <form action="/cumplimientos" method="POST" role="form" id="form">
        <legend>Crear nuevo Cumplimiento</legend>
    
        @include('cumplimientos._form')
        
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>

    
     
@endsection 

