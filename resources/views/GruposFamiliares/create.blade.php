@extends('index')

@section('content')
    
    <form action={{ route('gruposfamiliares.store', ['interno' => $interno]) }} method="POST" role="form" id="form">
        <legend>Agregar miembro al grupo familiar de: {!! $interno->nombre !!} {!!$interno->apellido !!}</legend>
    
        @include('GruposFamiliares._form')

    
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
     
@endsection 