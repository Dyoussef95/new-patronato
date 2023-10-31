@extends('index')
@section('content')
    <nav>
               <div class="nav nav-tabs" id="nav-tab" role="tablist">
               <a class="nav-item nav-link active" id="nav-datos-personales-tab" data-toggle="tab" onclick="location.href='/#datos-personales{!!$interno->id!!}" href="#datos-personales{!!$interno->id!!}" role="tab" aria-controls="datos-personales" aria-selected="true">Datos Personales</a>
                 <a class="nav-item nav-link" id="nav-datos-legales-tab" data-toggle="tab" href="#datos-legales{!!$interno->id!!}" role="tab" aria-controls="datos-legales" aria-selected="false">Datos Legales</a>
                 <a class="nav-item nav-link" id="nav-datos-salud-tab" data-toggle="tab" href="#datos-salud{!!$interno->id!!}" role="tab" aria-controls="datos-salud" aria-selected="false">Datos de Salud</a>
               </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
               <div class="tab-pane fade show active" id="datos-personales{!!$interno->id!!}" role="tabpanel" aria-labelledby="ndatos-personales-tab">
                  Nombre: {!!$interno->nombre!!} <br>
                  Apellido: {!!$interno->apellido!!} <br>
                  Genero: {{isset($interno->sexo) ? $interno->sexo->nombre : 'SIN INFORMACION'}} <br> 
                  DNI: {!! isset($interno->numero_documento) ? $interno->numero_documento : 'SIN INFORMACION' !!} <br>
                  Domicilio Declarado: {{isset($interno->domicilioDeclarado) ? $interno->domicilioDeclarado : 'SIN INFORMACION'}} <br>
                  Localidad: {!! isset($interno->localidad) ? $interno->localidad->nombre : 'SIN INFORMACION' !!} <br>
                  Estado Civil: {{ isset($interno->estado_civil) ? $interno->estado_civil->nombre : 'SIN INFORMACION'}} <br>
                  Fecha de Nacimiento: {{ isset($interno->fecha_nacimiento) ? $interno->fecha_nacimiento : 'SIN INFORMACION'}} <br>
                  Edad: {{isset($interno->fecha_nacimiento) ? $edad : 'SIN INFORMACION' }} <br>
                  Nivel de Instruccion: {{isset($interno->nivel_estudio) ? $interno->nivel_estudio->nombre : 'SIN INFORMACION'}} <br>
                  Situacion Laboral: {{isset($interno->situacion_laboral) ? $interno->situacion_laboral->nombre : 'SIN INFORMACION'}} <br>
                  Trabajo: {{isset($interno->trabajo) ? $interno->trabajo->nombre : 'SIN INFORMACION'}} <br>
                  
                  
               </div>
               <div class="tab-pane fade" id="datos-legales{!!$interno->id!!}" role="tabpanel" aria-labelledby="datos-legales-tab">
               @if($historia==null)                  
                   No hay datos registrados...
                     <br>
                     <a href="../historias/create/{{$interno->id}}"  class="btn btn-success btn-sm m-0">Ingresar Datos</a> 
               @else
               <a href="../historias/{{ $interno->historia->id }}/edit" class="btn btn-success btn-sm">Editar</a>
             
               <br><br>
              <!-- Legajo: {!!$interno->legajo!!} <br>
               Area: {{$historia->regimen->area->nombre}} <br>
               Regimen: {{$historia->regimen->nombre}} <br>
               Fecha de Ingreso: {{$historia->fechaInicio}} <br>
               Tipo Delito: {{$historia->delito_especifico->tipos_delitos->nombre}} <br>
               Delito Especifico: {{$historia->delito_especifico->nombre}} <br> <br>
               MOTIVO DE INGRESO AL PROGRAMA: {{$historia->motivos_ingreso->nombre}} <br> <br>
               Situacion Procesal: {{$historia->situacion_procesal->nombre}} <br>
               Frecuencia de Control: {{$historia->frecuencia->nombre}} <br>-->
               
             
               @endif
            
                     
               </div>
               <div class="tab-pane fade" id="datos-salud{!!$interno->id!!}" role="tabpanel" aria-labelledby="datos-salud-tab">
                  @isset($interno->situacion_salud->id)
                     @include('situacionsaluds.index',['situacionsalud' => $interno->situacion_salud])
                  @endisset
                 
                  @empty($interno->situacion_salud->id)
                     No hay datos registrados...
                     <br>
                     <a href="../situacionsaluds/create/{{$interno->id}}" class="btn btn-primary btn-sm m-0">Ingresar Datos</a>
                  @endempty
               </div>
             </div>
            </div>   
@endsection

