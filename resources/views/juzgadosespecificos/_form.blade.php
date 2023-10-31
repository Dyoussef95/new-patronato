<div class="form-group">
    <label for="">Nombre</label>
<input type="text" name="nombre" value="{{ isset($juzgadoespecifico) ? $juzgadoespecifico->nombre : '' }}" class="form-control" id="" placeholder="Ingrese un nombre">
</div>

<div class="form-group">
    <select name="juzgadoTipo_id" form="form" class="select2" style="width:400px;">
        @if (isset($juzgadostipos))
            @foreach ($juzgadostipos as $juzgadotipo)
                <option value={{ $juzgadotipo->id }}>{{ $juzgadotipo->nombre }}</option>
            @endforeach
        @endif
    </select>
</div>

<div class="form-group">
    <input type="hidden" name="habilitado" class="form-control" id="" value="true">
</div>

