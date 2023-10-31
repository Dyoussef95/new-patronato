@csrf

<div class="form-group">
    <label for="">Nombre</label>
<input type="text" name="nombre" value="{{ isset($area) ? $area->nombre : '' }}" class="form-control" id="" placeholder="Ingrese un nombre">
</div>

