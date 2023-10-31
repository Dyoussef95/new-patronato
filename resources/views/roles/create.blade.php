@extends('index')
@section('content')
    
    <form action="/roles" method="POST" role="form" id="form">
        <legend>Crear nuevo Rol</legend>
    
        @include('roles._form')
        <div class="form-group">
            <input type="submit" class="btn btn-primary">
        </div>
        
    </form>
     
@endsection 