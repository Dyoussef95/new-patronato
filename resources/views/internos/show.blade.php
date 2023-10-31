@extends('index')
@section('content')
<button type="button" class="btn btn-warning" onclick="location.href='../../internos'">Volver</button>
<nav>
   <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <a class="nav-item nav-link {{ substr(url()->full(),-1)!='=' ? 'active' : ''}}" id="nav-datos-personales-tab" data-toggle="tab" href="#datos-personales"
         role="tab" aria-controls="datos-personales" aria-selected="true">Datos Personales</a>
      <a class="nav-item nav-link {{ substr(url()->full(),-2)=='2=' ? 'active' : ''}}" id="nav-datos-legales-tab" data-toggle="tab" href="#datos-legales" role="tab"
         aria-controls="datos-legales" aria-selected="false">Datos Legales</a>
      <a class="nav-item nav-link" id="nav-datos-salud-tab" data-toggle="tab" href="#datos-salud" role="tab"
         aria-controls="datos-salud" aria-selected="false">Datos de Salud</a>
      <a class="nav-item nav-link {{ substr(url()->full(),-2)=='4=' ? 'active' : ''}}" id="nav-grupo-familiar-tab" data-toggle="tab" href="#grupo-familiar" role="tab"
   aria-controls="grupo-familiar" aria-selected="false"
         >Grupo Familiar</a>
   </div>
</nav>

<div class="tab-content" id="nav-tabContent">
   
   <div class="tab-pane fade {{ substr(url()->full(),-1)!='=' ? 'show active' : ''}}" id="datos-personales" role="tabpanel" aria-labelledby="ndatos-personales-tab">
      <div class="table-responsive">
         <table class="table table-bordered border border-dark">
            <tbody>
               <tr>
                  <td class="border border-dark">Nombre:</td>
                  <td class="table-secondary border border-dark">{!!$interno->nombre!!}</td>
                  <td class="border border-dark">Apellido:</td>
                  <td class="table-secondary border border-dark">{!!$interno->apellido!!}</td>
               </tr>
               <tr>
                  <td class="border border-dark">{!! isset($interno->tipo_documento_id) ? $tiposDocumento->find($interno->tipo_documento_id)->nombre : 'Documento:' !!}</td>
                  <td class="table-secondary border border-dark">{!! isset($interno->numero_documento) ? $interno->numero_documento : 'SIN INFORMACION' !!}</td>
                  <td class="border border-dark">Genero:</td>
                  <td class="table-secondary border border-dark">{{isset($interno->sexo) ? $interno->sexo->nombre : 'SIN INFORMACION'}} </td>
               </tr>
               <tr>
                  <td class="border border-dark">Domicilio declarado:</td>
                  <td class="table-secondary border border-dark" colspan="3">{{isset($interno->domicilioDeclarado) ? $interno->domicilioDeclarado : 'SIN INFORMACION'}}</td>
               </tr>
               <tr>
                  <td class="border border-dark">Nacionalidad:</td>
                  <td class="table-secondary border border-dark"> {!! isset($interno->nacionalidad) ? $interno->nacionalidad->nombre : 'SIN INFORMACION' !!}</td>
                  <td class="border border-dark">Localidad:</td>
                  <td class="table-secondary border border-dark"> {!! isset($interno->localidad) ? $interno->localidad->nombre : 'SIN INFORMACION' !!} </td>
               </tr>
               <tr>
                  <td class="border border-dark">Fecha de nacimiento:</td>
                  <td class="table-secondary border border-dark">{{ isset($interno->fecha_nacimiento) ? $interno->fecha_nacimiento : 'SIN INFORMACION'}}</td>
                  <td class="border border-dark">Edad:</td>
                  <td class="table-secondary border border-dark">{{isset($interno->fecha_nacimiento) ? $edad : 'SIN INFORMACION' }}</td>
               </tr>
               <tr>
                  <td class="border border-dark">Estado Civil:</td>
                  <td class="table-secondary border border-dark"> {{ isset($interno->estado_civil) ? $interno->estado_civil->nombre : 'SIN INFORMACION'}}</td>
                  <td class="border border-dark">Nivel de instruccion:</td>
                  <td class="table-secondary border border-dark">{{isset($interno->nivel_estudio) ? $interno->nivel_estudio->nombre : 'SIN INFORMACION'}}</td>
               </tr>
               <tr>
                  <td class="border border-dark">Situacion laboral:</td>
                  <td class="table-secondary border border-dark">{{isset($interno->situacion_laboral) ? $interno->situacion_laboral->nombre : 'SIN INFORMACION'}}</td>
                  <td class="border border-dark">Trabajo:</td>
                  <td class="table-secondary border border-dark">{{isset($interno->trabajo) ? $interno->trabajo->nombre : 'SIN INFORMACION'}}</td>
               </tr>
            </tbody>
         </table>
      </div>

      @if(Auth::user()->empleado->id==$empleado_id || in_array(Auth::user()->rol()->codigo,array(1,2)) )
      <a href="../internos/{{ $interno->id }}/edit" class="btn btn-success btn-sm m-0">Editar</a>
      @endif
   </div>

   <div class="tab-pane fade {{ substr(url()->full(),-2)=='2=' ? 'show active' : ''}}" id="datos-legales" role="tabpanel" aria-labelledby="datos-legales-tab">
      @if($historia==null)
         No hay datos registrados...
         <br>
         <a href="../historias/create/{{$interno->id}}" class="btn btn-success btn-sm m-0">Ingresar Datos</a>
      @else
         Legajo: {!!isset($interno->legajo) ? $interno->legajo : 'SIN INFORMACION'!!} <br>
         Area: {{isset($historia->regimen->area->nombre) ? $historia->regimen->area->nombre : 'SIN INFORMACION'}} <br>
         Regimen: {{isset($historia->regimen->nombre) ? $historia->regimen->nombre : 'SIN INFORMACION'}} <br>
         Fecha de Ingreso: {{isset($historia->fecha_inicio) ? $historia->fecha_inicio : 'SIN INFORMACION'}} <br>
         Tipo Delito:
         {{isset($historia->delito_especifico->tipo_delito->nombre) ? $historia->delito_especifico->tipo_delito->nombre : 'SIN INFORMACION'}}
         <br>
         Delito Especifico:
         {{isset($historia->delito_especifico->nombre) ? $historia->delito_especifico->nombre : 'SIN INFORMACION'}} <br>
         Motivo de Ingreso al Programa: 
         {{isset($historia->motivo_ingreso->nombre) ? $historia->motivo_ingreso->nombre : 'SIN INFORMACION' }} <br>
         Situacion Procesal:
         {{isset($historia->situacion_procesal->nombre) ? $historia->situacion_procesal->nombre : 'SIN INFORMACION'}}<br>
         Frecuencia de Control:
         {{isset($historia->frecuencia->nombre) ? $historia->frecuencia->nombre : 'SIN INFORMACION'}}<br>
         @if(Auth::user()->empleado->id==$empleado_id || in_array(Auth::user()->rol()->codigo,array(1,2)) )
            <a href="../historias/{{ $historia->id }}/edit" class="btn btn-success btn-sm">Editar</a>
         @endif
      @endif
   </div>

   <div class="tab-pane fade" id="datos-salud" role="tabpanel" aria-labelledby="datos-salud-tab">
      @isset($interno->situacion_salud->id)
      @include('situacionsaluds.index',['situacionsalud' => $interno->situacion_salud])
      @endisset

      @empty($interno->situacion_salud->id)
      No hay datos registrados...
      <br>
         @if(Auth::user()->empleado->id==$empleado_id || in_array(Auth::user()->rol()->codigo,array(1,2)) )
            <a href="../situacionsaluds/create/{{$interno->id}}" class="btn btn-primary btn-sm m-0">Ingresar Datos</a>
         @endif
      @endempty
   </div>

   <div class="tab-pane fade {{ substr(url()->full(),-2)=='4=' ? 'show active' : ''}}" id="grupo-familiar" role="tabpanel" aria-labelledby="grupo-familiar-tab">
      
      @include('GruposFamiliares._index')
   </div>
</div>

@endsection