<div class="container">
    <div class="row border-bottom border-info bg-light">
        <div class="col border-right border-info">
            <div class="form-group">
                <label for="">Apellidos</label>
                <input required type="text" name="apellido" value="{{ isset($interno) ? $interno->apellido : '' }}"
                    class="form-control" id="" placeholder="Ingrese los apellidos">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="">Nombres</label>
                <input required type="text" name="nombre" value="{{ isset($interno) ? $interno->nombre : '' }}"
                    class="form-control" id="" placeholder="Ingrese los nombres">
            </div>
        </div>
    </div>
    <div class="row border-bottom border-info bg-light">
        <div class="col border-right border-info">
            <div class="form-group">
                <label for="">Tipo de documento</label>
                <select name="tipo_documento_id" form="form" class="select2" style="width:400px;">
                    @foreach ($tipodocumentos as $tipodocumento)
                    <option value={{ $tipodocumento->id }}>{{ $tipodocumento->nombre }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col border-right border-info">
            <div class="form-group">
                <label for="">Numero de documento</label>
                <input type="text" name="numero_documento"
                    value="{{ isset($interno) ? $interno->numero_documento : '' }}" class="form-control" id=""
                    placeholder="Ingrese el documento">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="">Fecha de Nacimiento</label>
                <input type="date" name="fecha_nacimiento"
                    value="{{ isset($interno) ? $interno->fecha_nacimiento : '' }}" class="form-control" id=""
                    placeholder="DD/MM/AAAA">
            </div>
        </div>
    </div>
    <div class="row border-bottom border-info bg-light">
        <div class="col border-right border-info">
            <div class="form-group">
                <label for="">Nacionalidad</label>
                <select name="nacionalidad_id" form="form" class="select2" style="width:400px;">
                    @foreach ($nacionalidades as $nacionalidad)
                    <option value={{ $nacionalidad->id }}>{{ $nacionalidad->nombre }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="">Profesion u Oficio</label>
                <select name="trabajo_id" form="form" class="select2" style="width:400px;">
                    @foreach ($trabajos as $trabajo)
                    <option value={{ $trabajo->id }}>{{ $trabajo->nombre }}</option>
                    @endforeach
                </select>
                <i class="fas fa-plus-circle" onclick="" style="cursor: pointer;"></i>
            </div>
        </div>
    </div>
    <div class="row border-bottom border-info bg-light">
        <div class="col">
            <div class="form-group">
                <label for="">Domicilio Declarado</label>
                <input type="text" name="domicilioDeclarado" value="{{ isset($interno) ? $interno->domicilioDeclarado : '' }}"
                    class="form-control" id="" placeholder="Ingrese el documento">
            </div>
        </div>
    </div>
    <div class="row border-bottom border-info bg-light">
        <div class="col border-right border-info">
            <div class="form-group">
                <label for="">Telefono</label>
                <input type="number" name="telefono" value="{{ isset($interno) ? $interno->telefono : '' }}"
                    class="form-control" id="" placeholder="Ingrese el Telefono">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="">Localidad</label>
                <select name="localidad_id" form="form" class="select2" style="width:400px;">
                    @foreach ($localidades as $localidad)
                    <option value={{ $localidad->id }}>{{ $localidad->nombre }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row border-bottom border-info bg-light">
        <div class="col">
            <div class="form-group">
                <label for="">Observaciones</label>
                <input type="text" name="observaciones" value="{{ isset($interno) ? $interno->observaciones : '' }}"
                    class="form-control" id="" placeholder="Ingrese texto">
            </div>
        </div>
    </div>
    <div class="row bg-light">
        <div class="col">
            <div class="form-group">
                <label for="">Legajo</label>
                <input required type="number" name="legajo" value="{{ isset($interno) ? $interno->legajo : '' }}"
                    class="form-control" id="" placeholder="Ingrese el legajo">
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <input type="hidden" name="url" class="form-control" id="" value={{URL::previous()}}>
</div>