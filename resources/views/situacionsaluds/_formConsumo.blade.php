@csrf

<div class="form-group">
    <label for="">Consumo</label>
    <select name="consumo_id" form="form" class="select2" style="width:400px;">
        @foreach ($listaConsumos as $listaConsumo)
        <option value={{ $listaConsumo->id }}            
            @isset($situacionSaludConsumo/*SI EL CONSUMO EXISTE APARECERA SELECCIONADO*/)
                {{ $listaConsumo->id==$situacionSaludConsumo->consumo_id ? 'selected' : '' }} 
            @endisset>
            {{ $listaConsumo->objeto_consumo }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="">Tipo de Consumo</label>
    <select name="tipo_consumo_id" form="form" class="select2" style="width:400px;">
        @foreach ($tiposConsumo as $tipoConsumo)
        <option value={{ $tipoConsumo->id }}            
            @isset($situacionSaludConsumo/*SI EL CONSUMO EXISTE APARECERA SELECCIONADO*/)
                {{ $tipoConsumo->id==$situacionSaludConsumo->tipo_consumo_id ? 'selected' : '' }} 
            @endisset>
            {{ $tipoConsumo->nombre }}</option>
        @endforeach
    </select>
</div>

<div class="form-group" onclick="ocultarLugar();">
    <label for="">Recibe tratamiento?</label>
    <br>
    <input type="radio" name="tratamiento" value="false" checked> 
    No
    <br>
    <input id="radioTrue" type="radio" name="tratamiento" value="true" 
    @isset($situacionSaludConsumo)
        {{ $situacionSaludConsumo->tratamiento==true ? 'checked' : '' }} 
    @endisset> 
    Si
    <br>
</div>

<div id="form_lugar_tratamiento" style=
@if(isset($situacionSaludConsumo)) 
    {{ $situacionSaludConsumo->tratamiento==false ? "display:none" : "display:block" }}
@else
{{ "display:none" }} 
@endif>

    <div class="form-group">

        <label for="">Lugar de Tratamiento del Consumo</label>
        <select name="lugar_tratamiento_consumo_id" form="form" class="select2" style="width:400px;">
            @foreach ($centrosConsumo as $centroConsumo)
            <option value={{ $centroConsumo->id }} 
                @isset($situacionSaludConsumo)
                    {{ $centroConsumo->id == $situacionSaludConsumo->lugar_tratamiento_consumo_id ? 'selected' : '' }} 
                @endisset>
                {{ $centroConsumo->nombre }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="">Tipo de Tratamiento del Consumo</label>
        <select name="tipo_tratamiento_consumos_id" form="form" class="select2" style="width:400px;">
            @foreach ($tiposTratamientosConsumo as $tipoTratamientoConsumo)
            <option value={{ $tipoTratamientoConsumo->id }} 
                @isset($situacionSaludConsumo)
                    {{ $tipoTratamientoConsumo->id == $situacionSaludConsumo->tipo_tratamiento_consumos_id ? 'selected' : '' }} 
                @endisset>
                {{ $tipoTratamientoConsumo->nombre }}</option>
            @endforeach
        </select>
    </div>

</div>

<div class="form-group">
    <input type="hidden" name="url" class="form-control" id="" value={{URL::previous()}}>
</div>

<script>
    function ocultarLugar(){
        var x = document.getElementById("form_lugar_tratamiento");
        var y = document.getElementById("radioTrue");
        if (y.checked == true) {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>