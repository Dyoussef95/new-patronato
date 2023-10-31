@csrf
<div class="form-group">
    <label for="">Nombre</label>
<input type="text" name="nombre" value="{{ isset($tipodocumento) ? $tipodocumento->nombre : '' }}" class="form-control" id="" placeholder="Ingrese un nombre">
</div>

<div class="form-group">
    <input type="hidden" name="url" class="form-control" id="" value={{URL::previous()}}>
</div>