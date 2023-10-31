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
    
    <form action="/situacionsalud/consumo/{{ $situacionSalud->id }}" method="POST" role="form" id="form">
        <legend>Agregar nuevo Consumo</legend>
    
        @include('situacionsaluds._formConsumo')
        
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 