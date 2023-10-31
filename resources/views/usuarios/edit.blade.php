@extends('index')

@section('title')
    
@endsection

@section('content')

<div class="card-header"><legend>Editar usuario</legend></div>
    <div class="card-body">
    
    <form action="/usuarios/{{$usuario->id}}" method="POST" role="form" id="form">
        @method('PUT')
        @csrf
        Editar Trabajo {{ $usuario->name }}

        @include('usuarios._form')
    
        <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Actualizar') }}
                    </button>
                </div>
            </div>
    </form>
    </div>
@endsection 