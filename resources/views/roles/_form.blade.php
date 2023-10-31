@csrf

<div class="form-group">
    <label for="">Nombre</label>
<input type="text" name="nombre" value="{{ isset($rol) ? $rol->nombre : '' }}" class="form-control" id="nombre" placeholder="Ingrese un rol">
</div>

<div class="form-group">
    <label for="">Codigo</label>
<input type="number" name="codigo" value="{{ isset($rol) ? $rol->nombre : '' }}" class="form-control" id="codigo" placeholder="Ingrese un codigo">
</div>

<div class="form-group">
    <input type="reset" value="Restaurar valores">
</div>




<div class="form-group">
    <input type="hidden" name="url" class="form-control" id="" value={{URL::previous()}}>
</div>