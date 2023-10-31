<h5>Consumos</h5>
<button type="button" class="btn btn-primary"
   onclick="location.href='../../situacionsalud/createConsumo/{{ $situacionsalud->id }}'">Agregar Nuevo</button>
<table class="table" id="tabla" style="width:auto">
   <thead>
      <tr>
         <th scope="col">Consumo</th>
         <th scope="col">Tipo</th>
         <th scope="col">Recibe Tratamiento</th>
         <th scope="col">Lugar de Tratamiento</th>
         <th scope="col">Tipo de Tratamiento</th>
         <th scope="col"></th>
         <th scope="col"></th>
      </tr>
   </thead>
   <tbody>
      @foreach($consumos as $consumo)
      <tr>
         <td>{!! $consumo->objeto_consumo !!}</td>
         <td>
            {{ isset($consumo->pivot->tipo_consumo_id) ? $tiposConsumo->find($consumo->pivot->tipo_consumo_id)->nombre : '' }}
         </td>
         <td>
            @if($consumo->pivot->tratamiento==true)
            SI
            @else
            NO
            @endif
         </td>
         <td>
            {{ isset($consumo->pivot->lugar_tratamiento_consumo_id) ? $centrosConsumo->find($consumo->pivot->lugar_tratamiento_consumo_id)->nombre : '' }}
         </td>
         <td>
            {{ isset($consumo->pivot->tipo_tratamiento_consumos_id) ? $tiposTratamientosConsumo->find($consumo->pivot->tipo_tratamiento_consumos_id)->nombre : '' }}
         </td>
         <td>
            <a href="http://localhost/situacionsalud/consumo/{{ $situacionsalud->id }}/{{ $consumo->id }}/edit"
               class="btn btn-success btn-sm">Editar</a>
         </td>
         <td>
            <form action="http://localhost/situacionsalud/consumo/{{$situacionsalud->id}}/{{$consumo->id}}" method="POST">
               @method('DELETE')
               @csrf
               <div class="form-group">
                  <input type="hidden" name="url" class="form-control" id="" value={{URL::current()}}>
               </div>
               <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
            </form>
         </td>
      </tr>
      @endforeach
   </tbody>
</table>