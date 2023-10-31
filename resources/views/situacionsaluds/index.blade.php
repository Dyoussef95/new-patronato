
   
   
   <a href="../../situacionsaluds/{{ $situacionsalud->id }}/edit" class="btn btn-success btn-sm">Editar</a><br> 
   <label for="">Tiene cobertura medica?: </label> 
       
   <span class="label label-success">
   @if($situacionsalud->cobertura_medica==true)
      SI
   @else
      NO
   @endif

   <h5>Enfermedades</h5>
   <table class="table" id="tabla" style="width:auto">
      <thead>
         <tr>
            <th scope="col">Enfermedad</th>
            <th scope="col">Recibe Tratamiento</th>
            <th scope="col">Lugar de Tratamiento</th>
         </tr>
      </thead>
      <tbody>
         @foreach($situacionsaludenfermedads as $situacionsaludenfermedad)
         @if($situacionsaludenfermedad->situacion_salud->id==$situacionsalud->id)
            <tr>
               <td>{!! $situacionsaludenfermedad->enfermedad->nombre !!}</td>
               <td>
                  @if($situacionsaludenfermedad->tratamiento==true)
                     SI
                  @else
                     NO
                  @endif
               </td>
               <td> {{ isset($situacionsaludenfermedad->lugar_tratamiento) ? $situacionsaludenfermedad->lugar_tratamiento->nombre : '' }}</td>
            </tr>
            @endif
         @endforeach
      </tbody>
   </table>
             
  

