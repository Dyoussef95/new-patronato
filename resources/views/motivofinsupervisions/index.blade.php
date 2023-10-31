@extends('parameters')

@section('parametersContent')
    
<button type="button" class="btn btn-info" onclick="location.href='motivofinsupervisions/create'">Agregar Nuevo</button>
<br><br>
<div class="table-responsive-sm">
<table class="table table-striped" id="tabla" style="width:auto">
   <thead class="thead-dark">
         <tr>
            <th scope="col">Nombre</th>
            <th scope="col"></th>
            <th scope="col"></th>
         </tr>
      </thead>
      <tbody>
         @foreach($motivofinsupervisions as $motivofinsupervision)
            <tr>
               <td>{!! $motivofinsupervision->nombre !!}</td>
               <td>
                  <a href="motivofinsupervisions/{{ $motivofinsupervision->id }}/edit" class="btn btn-success btn-sm">Editar</a>
               </td>
               <td>
                  <form action="/motivofinsupervisions/{{ $motivofinsupervision->id}}" method="POST">
                     @method('DELETE')
                     @csrf
                     <div class="form-group">
                        <input type="hidden" name="url" class="form-control" id="" value={{URL::previous()}}>
                    </div>
                     <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                  </form>                     
               </td>
            </tr>
         @endforeach
      </tbody>
   </table>

@endsection