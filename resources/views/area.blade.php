@extends('formulario')

@section('columns')
    <th scope="col">#</th>
    <th scope="col">Nombre</th>
@endsection

@section('data')
    @foreach($areas as $area)
    <tr>
        <td>{!! $area -> id !!}</td>
        <td>{!! $area -> nombre !!}</td>
        <td><button type="button" class="btn btn-success" class="updateButton" onclick="openUpdateForm()">Editar</button>
            <button type="button" class="btn btn-danger" onclick="">Eliminar</button></td>
    </tr>
    @endforeach
@endsection

@section('create')
<form action="/areas" method="POST" role="form" id="createForm">
        <legend>Agregar Area</legend>
    
        <div class="form-group">
            <label for="">Nombre del area</label>
            <input type="text" class="form-control" id="" name="nombre" placeholder="Ingrese nombre del area">
            <input type="hidden" value="true" name="habilitado" id="test">
        </div>

        <button type="submit" class="btn btn-primary" onclick="closeCreateForm()">Agregar</button>
        <button type="button" class="btn btn-danger" onclick="closeCreateForm()">Cancelar</button>

</form>  
@endsection

@section('update')
<form action="/areas" method="PUT" role="form" id="updateForm">
    @method('PUT')
        @csrf
    <legend id="">EDITANDO:</legend>
    <legend id="editLegend"></legend>

    <div class="form-group">
        <label for="">Nuevo nombre del area</label>
        <input type="hidden" class="form-control" id="id" name="id" value="">
        <input type="text" class="form-control" id="" name="nombre" placeholder="Ingrese nombre del area">
    </div>

    <button type="submit" class="btn btn-primary" onclick="closeUpdateForm()">Editar</button>
    <button type="button" class="btn btn-danger" onclick="closeUpdateForm()">Cancelar</button>

</form>
@endsection