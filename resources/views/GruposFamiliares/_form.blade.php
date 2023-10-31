@csrf

<div class="form-group">
    <label for="">Nombre</label>
<input type="text" name="nombre" value="{{ isset($grupoFamiliar) ? $grupoFamiliar->nombre : '' }}" class="form-control" id="" placeholder="Ingrese los nombres">
</div>

<div class="form-group">
    <label for="">Apellido</label>
<input type="text" name="apellido" value="{{ isset($grupoFamiliar) ? $grupoFamiliar->apellido : '' }}" class="form-control" id="" placeholder="Ingrese los apellidos">
</div>

<div class="form-group">
    <label for="">Parentezco: </label>
    <select name="parentezco_id" form="form" class="select2" style="width:400px;">
        @if (isset($parentezcos))
            @foreach ($parentezcos as $parentezco)
                <option value={{ $parentezco->id }}
                    @isset($grupoFamiliar)
                        @if($grupoFamiliar->parentezco_id==$parentezco->id)
                            selected
                        @endif                        
                    @endisset
                >{{ $parentezco->nombre }}</option>
            @endforeach
        @endif
    </select>
</div>

<div class="form-group">
    <label for="">Fecha de Nacimiento</label>
<input type="date" name="fecha_nacimiento" value="{{ isset($grupoFamiliar) ? $grupoFamiliar->fecha_nacimiento : '' }}" class="form-control" id="" placeholder="DD/MM/AAAA">
</div>

<div class="form-group">
    <label for="">Tipo de documento: </label>
    <select name="tipo_documento_id" form="form" class="select2" style="width:400px;">
        @if (isset($tiposDocumentos))
            @foreach ($tiposDocumentos as $tipoDocumento)
                <option value={{ $tipoDocumento->id }}
                    @isset($grupoFamiliar)
                        @if ($grupoFamiliar->tipo_documento_id==$tipoDocumento->id)
                            selected  
                        @endif                        
                    @endisset
                >{{ $tipoDocumento->nombre }}</option>
            @endforeach
        @endif
    </select>
</div>

<div class="form-group">
    <label for="">N° de Documento</label>
<input type="text" name="numero_documento" value="{{ isset($grupoFamiliar) ? $grupoFamiliar->numero_documento : '' }}" class="form-control" id="" placeholder="Ingrese el documento">
</div>

<div class="form-group">
    <label for="">Genero: </label>
    <select name="sexo_id" form="form" class="select2" style="width:400px;">
        @if (isset($sexos))
            @foreach ($sexos as $sexo)
                <option value={{ $sexo->id }}
                    @isset($grupoFamiliar)
                        @if($grupoFamiliar->sexo_id==$sexo->id)
                            selected
                        @endif                        
                    @endisset
                >{{ $sexo->nombre }}</option>
            @endforeach
        @endif
    </select>
</div>

<div class="form-group">
    <label for="">Domicilio: </label>
<input type="text" name="domicilio" value="{{ isset($grupoFamiliar) ? $grupoFamiliar->domicilio : '' }}" class="form-control" id="" placeholder="Ingrese el domicilio">
</div>

<div class="form-group">
    <label for="">Nivel de estudio: </label>
    <select name="nivel_estudio_id" form="form" class="select2" style="width:400px;">
        @if (isset($nivelesEstudio))
            @foreach ($nivelesEstudio as $nivelEstudio)
                <option value={{ $nivelEstudio->id }}
                    @isset($grupoFamiliar)
                        @if($grupoFamiliar->nivel_estudio_id==$nivelEstudio->id)
                            selected  
                        @endif                        
                    @endisset
                >{{ $nivelEstudio->nombre }}</option>
            @endforeach
        @endif
    </select>
</div>

<div class="form-group">
    <label for="">Estado civil: </label>
    <select name="estado_civil_id" form="form" class="select2" style="width:400px;">
        @if (isset($estadosCiviles))
            @foreach ($estadosCiviles as $estadoCivil)
                <option value={{ $estadoCivil->id }}
                    @isset($grupoFamiliar)
                        @if ($grupoFamiliar->estado_civil_id==$estadoCivil->id)
                           selected 
                        @endif
                        
                    @endisset
                >{{ $estadoCivil->nombre }}</option>
            @endforeach
        @endif
    </select>
</div>

<div class="form-group">
    <label for="">Situacion laboral: </label>
    <select name="situacion_laboral_id" form="form" class="select2" style="width:400px;">
        @if (isset($situacionesLaborales))
            @foreach ($situacionesLaborales as $situacionLaboral)
                <option value={{ $situacionLaboral->id }}
                    @isset($grupoFamiliar)
                        @if($grupoFamiliar->situacion_laboral_id==$situacionLaboral->id)
                          selected  
                        @endif                        
                    @endisset
                >{{ $situacionLaboral->nombre }}</option>
            @endforeach
        @endif
    </select>
</div>

<div class="form-group">
    <label for="">Oficio / Profesion: </label>
    <select name="trabajo_id" form="form" class="select2" style="width:400px;">
        @if (isset($trabajos))
            @foreach ($trabajos as $trabajo)
                <option value={{ $trabajo->id }}
                    @isset($grupoFamiliar)
                        @if($grupoFamiliar->trabajo_id==$trabajo->id)
                           selected 
                        @endif                        
                    @endisset
                >{{ $trabajo->nombre }}</option>
            @endforeach
        @endif
    </select>
</div>

<div class="form-group">
    <label for="">Observaciones: </label><br />
    <textarea style="width: 100mm; height:40mm" form="form"  name="observacion" placeholder="Ingrese una observacion">
{{ isset($grupoFamiliar) ? $grupoFamiliar->observacion : '' }}
    </textarea>
</div>

<div class="form-group">
    <input type="hidden" name="url" class="form-control" id="" value="{{URL::previous()}}">
</div>