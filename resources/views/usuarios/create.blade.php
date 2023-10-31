@extends('index')

@section('content')
    
    <div class="card-header"><legend>Crear nuevo Usuario</legend></div>
    <div class="card-body">
        <form action="/usuarios" method="POST" role="form" id="form">          
        
            @include('usuarios._form')

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Crear') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
     
@endsection 