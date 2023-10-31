
<h1>Grupo Familiar de {!!  $interno->nombre  !!} {!!  $interno->apellido  !!}</h1>
@if(Auth::user()->empleado->id==$empleado_id || in_array(Auth::user()->rol()->codigo,array(1,2)) )
           
   <a type="button" class="btn btn-info" href={{ route('gruposfamiliares.create', ['interno' => $interno])  }}>Agregar Nuevo</a>
@endif   
   <br><br>

<div class="table-responsive">
    <table class="table table-striped" id="tabla"  style="width:auto">
       <thead class="thead-dark">
          <tr>
             <th scope="col">Nombre</th>
             <th scope="col">Apellido</th>
             <th scope="col">Parentezco</th>
             <th scope="col"></th>
             <th scope="col"></th>
          </tr>
       </thead>
       <tbody>
          @foreach($gruposFamiliares as $grupoFamiliar)
             <tr>
                <td>{!! $grupoFamiliar->nombre !!}</td>
                <td>{!! $grupoFamiliar->apellido !!}</td>
                <td>{!! $parentezcos->find($grupoFamiliar->parentesco_id)->nombre !!}</td>
                <td>
                   <a href="gruposFamiliares/edit" class="btn btn-success btn-sm">Editar</a>
                </td>
                <td>
                   <form action={{ route('gruposfamiliares.destroy', ['interno' => $interno, 'grupoFamiliar' => $grupoFamiliar])  }} method="POST">
                      @method('DELETE')
                      @csrf
                      <div class="form-group">
                        <input type="hidden" name="url" class="form-control" id="" value="{{URL::current()}}">
                      </div>
                      <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                   </form>                     
                </td>
             </tr>
          @endforeach
       </tbody>
    </table>
</div>
