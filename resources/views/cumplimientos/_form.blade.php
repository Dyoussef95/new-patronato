<div class="form-group">
    <label for="">Tipo de Cumplimiento</label>
<input type="text" name="tipoCumplimiento" value="{{ isset($cumplimiento) ? $cumplimiento->tipoCumplimiento : '' }}" class="form-control" id="" placeholder="Ingrese el tipo de cumplimiento">
</div>

<div class="form-group">
    <label for="">Fecha de Cumplimiento</label>
<input type="date" name="fechaCumplimiento" value="{{ isset($cumplimiento) ? $cumplimiento->fechaCumplimiento : '' }}" class="form-control" id="" placeholder="dd/mm/aaaa">
</div>

<div class="form-group">
    <label for="">Motivo de Fin de Supervision</label>
    <select name="motivo_fin_supervision_id" form="form" class="select2">
        @if (isset($motivofinsupervisions))
            @foreach ($motivofinsupervisions as $motivofinsupervision)
                <option value={{ $motivofinsupervision->id }}>{{ $motivofinsupervision->nombre }}</option>
            @endforeach
        @endif
    </select>
</div>

<div class="form-group">
    <select name="historia_id" form="form" class="select2">
        @if (isset($historias))
            @foreach ($historias as $historia)
                <option value={{ $historia->id }}>{{ $historia->interno->nombre }}</option>
            @endforeach
        @endif
    </select>
</div>

<div class="form-group">
        <input type="hidden" name="url" class="form-control" id="" value={{URL::previous()}}>
</div>

