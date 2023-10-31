@extends('parameters')

@section('parametersContent')
    
   <h1>Cumplimientos</h1>

   <button type="button" class="btn btn-info" onclick="location.href='cumplimientos/create'">Agregar Nuevo</button>
   <br><br>
   <div class="table-responsive-sm">
   <table class="table table-striped" id="tabla" style="width:auto;">
      <thead class="thead-dark">
         <tr>
            <th scope="col">Tipo de Cumplimiento</th>
            <th scope="col">Fecha de Cumplimiento</th>
            <th scope="col">Motivo de Fin de Supervision</th>
            <th scope="col"></th>
            <th scope="col"></th>
         </tr>
      </thead>
      <tbody>
         @foreach($cumplimientos as $cumplimiento)
            <tr>
               <td>{!! $cumplimiento->tipoCumplimiento !!}</td>
               <td>{!! $cumplimiento->fechaCumplimiento !!}</td>
               <td>{!! $cumplimiento->motivo_fin_supervision->nombre !!}</td>
               <td>
                  <a href="cumplimientos/{{ $cumplimiento->id }}/edit" class="btn btn-success btn-sm">Editar</a>
               </td>
               <td>
                  <form action="/cumplimientos/{{ $cumplimiento->id}}" method="POST">
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