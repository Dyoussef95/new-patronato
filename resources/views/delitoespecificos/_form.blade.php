<div class="form-group">
    <label for="">Nombre</label>
<input type="text" name="nombre" value="{{ isset($delitoespecifico) ? $delitoespecifico->nombre : '' }}" class="form-control" id="" placeholder="Ingrese un nombre">
</div>

<div class="form-group">
    <select name="tipos_delitos_id" form="form" class="select2" style="width:400px;">
        @if (isset($tipodelitos))
            @foreach ($tipodelitos as $tipodelito)
                <option value={{ $tipodelito->id }}>{{ $tipodelito->nombre }}</option>
            @endforeach
        @endif
    </select>
</div>

<div class="form-group">
    <input type="hidden" name="habilitado" class="form-control" id="" value="true">
</div>