<div class="form-group">
    <label for="">Nombre</label>
<input type="text" name="nombre" value="{{ isset($localidad) ? $localidad->nombre : '' }}" class="form-control" id="" placeholder="Ingrese un nombre">
</div>

<div class="form-group">
    <label for="">Codigo Postal</label>
<input type="number" name="codigo_postal" value="{{ isset($localidad) ? $localidad->codigo_postal : '' }}" class="form-control" id="" placeholder="Ingrese un codigo postal">
</div>

<div class="form-group">
    <select name="departamento_id" form="form" class="select2">
        @if (isset($departamentos))
            @foreach ($departamentos as $departamento)
                <option value={{ $departamento->id }}>{{ $departamento->nombre }}</option>
            @endforeach
        @endif
    </select>
</div>

<div class="form-group">
    <input type="hidden" name="url" class="form-control" id="" value={{URL::previous()}}>
</div>

