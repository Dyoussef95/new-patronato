<div class="form-group">
    <label for="">Fecha Inicio</label>
<input required type="date" name="fechaInicio" value="{{ isset($historia) ? $historia->fecha_inicio : '' }}" style="width:400px;" class="form-control" id="" placeholder="dd/mm/aaaa">
</div>

<div class="form-group">
<label for="">Seleccione el regimen:</label><br>
    <select name="regimen_id" form="form" class="select2" style="width:400px;">
        @foreach ($regimenes as $regimen)
            <option value={{ $regimen->id }}
                @if(isset($historia->regimen->id))
                    {{$historia->regimen->id==$regimen->id ? 'selected' : ''}}
                @endif
            >
            {{ $regimen->nombre }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
<label for="">Seleccione el delito:</label><br>
    <select name="delito_especifico_id" form="form" class="select2" style="width:400px;">
        @foreach ($delitoespecificos as $delitoespecifico)
            <option value={{ $delitoespecifico->id }}
                @if(isset($historia->delito_especifico->id))
                    {{$historia->delito_especifico->id==$delitoespecifico->id ? 'selected' : ''}}
                @endif
            >
            {{ $delitoespecifico->nombre }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
<label for="">Seleccione la situacion procesal:</label><br>
    <select name="situacion_procesal_id" form="form" class="select2" style="width:400px;">
        @foreach ($situacionprocesales as $situacionprocesal)
            <option value={{ $situacionprocesal->id }}
                @if(isset($historia->situacion_procesal->id))
                    {{$historia->situacion_procesal->id==$situacionprocesal->id ? 'selected' : ''}}
                @endif
            >
            {{ $situacionprocesal->nombre }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
<label for="">Seleccione el motivo de ingreso al programa:</label><br>
    <select name="motivos_de_ingreso_programa_id" form="form" class="select2" style="width:400px;">
        @foreach ($motivosdeingresoalprograma as $motivodeingresoalprograma)
            <option value={{ $motivodeingresoalprograma->id }}
                @if(isset($historia->motivo_ingreso->id))
                    {{$historia->motivo_ingreso->id==$motivodeingresoalprograma->id ? 'selected' : ''}}
                @endif
            >
            {{ $motivodeingresoalprograma->nombre }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
<label for="">Seleccione la frecuencia de control:</label><br>
    <select name="frecuencia_id" form="form" class="select2" style="width:400px;">
        @foreach ($frecuenciacontroles as $frecuenciacontrol)
            <option value={{ $frecuenciacontrol->id }}
                @if(isset($historia->frecuencia->id))
                    {{$historia->frecuencia->id==$frecuenciacontrol->id ? 'selected' : ''}}
                @endif
            >
            {{ $frecuenciacontrol->nombre }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
<label for="">Seleccione la procedencia:</label><br>
    <select name="juzgado_especifico_id" form="form" class="select2" style="width:400px;">
        @foreach ($juzgadoespecificos as $juzgadoespecifico)
            <option value={{ $juzgadoespecifico->id }}
                @if(isset($historiajuzgadoespecifico->id))
                    {{$historia->juzgadoespecifico->id==$juzgadoespecifico->id ? 'selected' : ''}}
                @endif
            >
            {{ $juzgadoespecifico->nombre }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
        <input type="hidden" name="url" class="form-control" id="" value={{URL::previous()}}>
</div>