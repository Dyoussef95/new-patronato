@extends('index')

@section('content')


<h1>Usuarios</h1>



<button type="button" class="btn btn-primary" onclick="location.href='usuarios/create'">Agregar Nuevo</button>
<br><br>
<div class="table-responsive">
   <table class="table table-striped" id="tabla" style="width:auto">
      <thead class="thead-dark">
         <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Usuario</th>
            <th>Rol</th>
            <th scope="col">Email</th>
            <th scope="col"></th>
            <th scope="col"></th>
         </tr>
      </thead>
      <tbody>
         @foreach($empleados as $empleado)
         <tr>
            <td>{!! $empleado->nombre !!}</td>
            <td>{!! $empleado->apellido !!}</td>
            <td>{!! $usuarios->find($empleado->user_id)->name !!}</td>
            <td>{!! $roles->find($usuarios->find($empleado->user->id)->rol_id)->nombre !!}</td>
            <td>{!! $usuarios->find($empleado->user_id)->email !!}</td>
            
            <td>
               <a href="usuarios/{{ $empleado->user_id }}/edit" class="btn btn-success btn-sm">Editar</a>
            </td>
            <td>
               <form action="/usuarios/{{ $empleado->user_id }}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
               </form>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>
</div>



@endsection