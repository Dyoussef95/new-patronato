
@php
    session_start();
@endphp

<div class="form-group">
    <label for="">Apellidos</label>
<input required type="text" name="apellido" value="{{ isset($interno) ? $interno->apellido : '' }}" class="form-control" id="" placeholder="Ingrese los apellidos">
</div>

<div class="form-group">
    <label for="">Nombres</label>
<input required type="text" name="nombre" value="{{ isset($interno) ? $interno->nombre : '' }}" class="form-control" id="" placeholder="Ingrese los nombres">
</div>

<div class="form-group">
    <label for="">Legajo</label>
<input required type="number" name="legajo" value="{{ isset($interno) ? $interno->legajo : '' }}" class="form-control" id="" placeholder="Ingrese el legajo">
</div>

<div class="form-group">
    <label for="">Fecha de Nacimiento</label>
<input type="date" name="fecha_nacimiento" value="{{ isset($interno) ? $interno->fecha_nacimiento : '' }}" class="form-control" id="" placeholder="DD/MM/AAAA">
</div>

<div class="form-group">
    <label for="">Tipo de documento</label>
    <select name="tipos_documento_id" form="form" class="select2" style="width:400px;">       
        @if (isset($tipodocumentos))
            @foreach ($tipodocumentos as $tipodocumento)
                <option value={{ $tipodocumento->id }}>{{ $tipodocumento->nombre }}</option>
            @endforeach
        @endif
    </select>
    
</div>


<div class="form-group">
    <label for="">Numero de documento</label>
<input type="text" name="numero_documento" value="{{ isset($interno) ? $interno->numero_documento : '' }}" class="form-control" id="" placeholder="Ingrese el documento">
</div>

<div class="form-group">
    <label for="">Edad</label>
<input type="number" name="telefono" value="{{ isset($interno) ? $interno->telefono : '' }}" class="form-control" id="" placeholder="Ingrese la telefono">
</div>

<div class="form-group">
    <label for="">Domicilio Declarado</label>
<input type="text" name="domicilioDeclarado" value="{{ isset($interno) ? $interno->domicilioDeclarado : '' }}" class="form-control" id="" placeholder="Ingrese el documento">
</div>

<div class="form-group">
        <label for="">Juzgado</label>
        <select name="juzgado_tipos_id" form="form" class="select2" style="width:400px;">            
                @foreach ($juzgadotipos as $juzgadotipo)
                    <option value={{ $juzgadotipo->id }}>{{ $juzgadotipo->nombre }}</option>
                @endforeach            
        </select>
</div>

<div class="form-group">
    <label for="">Estado civil</label>
    <select name="estado_civil_id" form="form" class="select2" style="width:400px;">
        @if (isset($estadociviles))
            @foreach ($estadociviles as $estadocivil)
                <option value={{ $estadocivil->id }}>{{ $estadocivil->nombre }}</option>
            @endforeach
        @endif
    </select>
</div>

<div class="form-group">
    <label for="">Situacion laboral</label>
    <select name="situaciones_laborales_id" form="form" class="select2" style="width:400px;">
        @if (isset($situacioneslaborales))
            @foreach ($situacioneslaborales as $situacionlaboral)
                <option value={{ $situacionlaboral->id }}>{{ $situacionlaboral->nombre }}</option>
            @endforeach
        @endif
    </select>
</div>

<div class="form-group">
    <label for="">Nivel de estudio</label>
    <select name="nivel_estudio_id" form="form" class="select2" style="width:400px;">
        @if (isset($nivelestudios))
            @foreach ($nivelestudios as $nivelestudio)
                <option value={{ $nivelestudio->id }}>{{ $nivelestudio->nombre }}</option>
            @endforeach
        @endif
    </select>
</div>

<div class="form-group">
        <label for="">Genero</label>
        <select name="sexo_id" form="form" class="select2" style="width:400px;">            
                @foreach ($sexos as $sexo)
                    <option value={{ $sexo->id }}>{{ $sexo->nombre }}</option>
                @endforeach            
        </select>
</div>

<div class="form-group">
        <label for="">Trabajo</label>
        <select name="trabajo_id" form="form" class="select2" style="width:400px;">            
                @foreach ($trabajos as $trabajo)
                    <option value={{ $trabajo->id }}>{{ $trabajo->nombre }}</option>
                @endforeach            
        </select>
        <i class="fas fa-plus-circle" onclick="location.href='../trabajos/create'" style="cursor: pointer;"></i>
</div>

<div class="form-group">
        <label for="">Localidad</label>
        <select name="localidad_id" form="form" class="select2" style="width:400px;">            
                @foreach ($localidades as $localidad)
                    <option value={{ $localidad->id }}>{{ $localidad->nombre }}</option>
                @endforeach            
        </select>
</div>

<div class="form-group">
        <label for="">Observaciones</label>
    <input type="text" name="observaciones" value="{{ isset($interno) ? $interno->observaciones : '' }}" class="form-control" id="" placeholder="Ingrese texto">
</div>

<div class="form-group">
    <input type="hidden" name="url" class="form-control" id="" value={{URL::previous()}}>
</div>
