<div class="form-group">
    <label for="">Descripcion</label><br />
    <textarea style="width: 100mm; height:40mm" form="form"  name="nombre" placeholder="Ingrese una descripcion">{{ isset($motivosdelingresoalprograma) ? $motivosdelingresoalprograma->nombre : '' }}</textarea>
</div>

<div class="form-group">
    <select name="tipo_motivo_ingreso_programa_id" form="form" class="select2">
        @if (isset($tipomotivoingresoprogramas))
            @foreach ($tipomotivoingresoprogramas as $tipomotivoingresoprograma)
                <option value={{ $tipomotivoingresoprograma->id }}>{{ $tipomotivoingresoprograma->nombre }}</option>
            @endforeach
        @endif
    </select>
</div>

<div class="form-group">
    <input type="hidden" name="url" class="form-control" id="" value={{URL::previous()}}>
</div>