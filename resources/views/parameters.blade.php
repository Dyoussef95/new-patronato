@extends('index')

@section('content')
<ul class="nav nav-pills" id="myTab" role="tablist">
  <li class="nav-item"><!--Si la url actual es == a 'nivelestudio' la pestaña se activa-->
    <a class="nav-link {{Request::is('areas') ? 'active' : ''}}" id="areas-tab"  href="areas" role="tab" aria-controls="areas" aria-selected="false">Areas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{Request::is('consumos') ? 'active' : ''}}" id="consumos-tab"  href="consumos" role="tab" aria-controls="consumos" aria-selected="false">Consumos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{Request::is('tipoconsumos') ? 'active' : ''}}" id="tipoconsumos-tab"  href="tipoconsumos" role="tab" aria-controls="tipoconsumos" aria-selected="false">Consumos: Tipos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{Request::is('lugartratamientoconsumos') ? 'active' : ''}}" id="lugartratamientoconsumos-tab"  href="lugartratamientoconsumos" role="tab" aria-controls="lugartratamientoconsumos" aria-selected="false">Consumos: Lugares de Tratamiento</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{Request::is('tipostratamientosconsumos') ? 'active' : ''}}" id="tipostratamientosconsumos-tab"  href="tipostratamientosconsumos" role="tab" aria-controls="tipostratamientosconsumos" aria-selected="false">Consumos: Tipos de Tratamientos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{Request::is('delitoespecificos') ? 'active' : ''}}" id="delitoespecificos-tab"  href="delitoespecificos" role="tab" aria-controls="delitoespecificos" aria-selected="false">Delitos: Especifico</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{Request::is('tipodelitos') ? 'active' : ''}}" id="tipodelitos-tab"  href="tipodelitos" role="tab" aria-controls="tipodelitoss" aria-selected="false">Delitos: Tipos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{Request::is('departamentos') ? 'active' : ''}}" id="departamentos-tab"  href="departamentos" role="tab" aria-controls="departamentos" aria-selected="false">Departamentos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{Request::is('localidades') ? 'active' : ''}}" id="localidades-tab"  href="localidades" role="tab" aria-controls="localidades" aria-selected="false">Departamentos: Localidades</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{Request::is('enfermedads') ? 'active' : ''}}" id="enfermedades-tab"  href="enfermedads" role="tab" aria-controls="enfermedades" aria-selected="false">Enfermedades</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{Request::is('centrosaluds') ? 'active' : ''}}" id="centrosaluds-tab"  href="centrosaluds" role="tab" aria-controls="centrosaluds" aria-selected="false">Enfermedades: Centros de Salud</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{Request::is('estadosciviles') ? 'active' : ''}}" id="estadosciviles-tab" href="estadosciviles" role="tab" aria-controls="estadosciviles" aria-selected="false">Estados Civiles</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{Request::is('frecuenciascontroles') ? 'active' : ''}}" id="frecuenciascontroles-tab"  href="frecuenciascontroles" role="tab" aria-controls="frecuenciascontroles" aria-selected="false">Frecuencias de Control</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{Request::is('sexos') ? 'active' : ''}}" id="sexos-tab"  href="sexos" role="tab" aria-controls="sexos" aria-selected="false">Generos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{Request::is('juzgadosespecificos') ? 'active' : ''}}" id="juzgadosespecificos-tab" href="juzgadosespecificos" role="tab" aria-controls="juzgadosespecificos" aria-selected="false">Juzgados: Especificos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{Request::is('juzgadostipos') ? 'active' : ''}}" id="juzgadostipo-tab"  href="juzgadostipos" role="tab" aria-controls="juzgadostipos" aria-selected="false">Juzgados: Tipos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{Request::is('motivofinsupervisions') ? 'active' : ''}}" id="motivofinsupervisions-tab"  href="motivofinsupervisions" role="tab" aria-controls="motivofinsupervisions" aria-selected="false">Motivos de Fin de Supervision</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{Request::is('motivosdelingresoalprograma') ? 'active' : ''}}" id="motivosdelingresoalprograma-tab"  href="motivosdelingresoalprograma" role="tab" aria-controls="motivosdelingresoalprograma" aria-selected="false">Motivos de Ingreso al Programa</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{Request::is('tipomotivodingresoprogramas') ? 'active' : ''}}" id="tipomotivoingresoprogramas-tab"  href="tipomotivoingresoprogramas" role="tab" aria-controls="tipomotivoingresoprogramas" aria-selected="false">Motivos de Ingreso al Programa: Tipos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{Request::is('nacionalidades') ? 'active' : ''}}" id="nacionalidades-tab"  href="nacionalidades" role="tab" aria-controls="nacionalidades" aria-selected="false">Nacionalidades</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{Request::is('nivelestudio') ? 'active' : ''}}" id="profile-tab"  href="nivelestudio" role="tab" aria-controls="nivelestudio" aria-selected="false">Niveles de Estudio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{Request::is('parentezcos') ? 'active' : ''}}" id="profile-tab"  href="parentezcos" role="tab" aria-controls="parentezcos" aria-selected="false">Parentezcos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{Request::is('regimen') ? 'active' : ''}}" id="regimenes-tab"  href="regimen" role="tab" aria-controls="regimenes" aria-selected="false">Regimenes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{Request::is('roles') ? 'active' : ''}}" id="regimenes-tab"  href="roles" role="tab" aria-controls="roles" aria-selected="false">Roles de Usuario</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{Request::is('situacioneslaborales') ? 'active' : ''}}" id="situacioneslaborales-tab" href="situacioneslaborales" role="tab" aria-controls="situacioneslaborales" aria-selected="true">Situaciones Laborales</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{Request::is('situacionesprocesales') ? 'active' : ''}}" id="situacionesprocesales-tab"  href="situacionesprocesales" role="tab" aria-controls="situacionesprocesales" aria-selected="false">Situaciones Procesales</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{Request::is('tipodocumentos') ? 'active' : ''}}" id="tipodocumentos-tab"  href="tipodocumentos" role="tab" aria-controls="tipodocumentos" aria-selected="false">Tipos de Documento</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{Request::is('trabajos') ? 'active' : ''}}" id="trabajos-tab" href="trabajos" role="tab" aria-controls="trabajos" aria-selected="true">Trabajos</a>
  </li>
</ul>
<br>
<div class="tab-content">
  <div class="tab-pane active" id="" role="tabpanel" aria-labelledby="tab">@yield('parametersContent')</div>
</div>
  
@endsection