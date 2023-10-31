@extends('index')

@section('title')
Editar Situacion de Salud de {{ $situacionsalud->interno->nombre }}
@endsection

@section('content')

<form action="/situacionsaluds/{{$situacionsalud->id}}" method="POST" id="form" role="form">
   @method('PUT')
   @csrf
   <legend>Editar Situacion de Salud de {{ $situacionsalud->interno->nombre }}</legend>

   @include('situacionsaluds._form')

   <button type="submit" class="btn btn-primary">Actualizar</button>
</form>

@isset($situacionsalud)

   @include('situacionsaluds.indexEnfermedad')

   <br>

   @include('situacionsaluds.indexConsumo')

@endisset

@endsection