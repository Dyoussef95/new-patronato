@csrf

<div class="form-group">
    <label for="">Enfermedad</label>
    <select name="enfermedad_id" form="form" class="select2" style="width:400px;">
        @foreach ($listaEnfermedades as $listaEnfermedad)
        <option value={{ $listaEnfermedad->id }} @isset($situacionSaludEnfermedad)
            {{ $listaEnfermedad->id==$situacionSaludEnfermedad->enfermedad_id ? 'selected' : '' }} @endisset>
            {{ $listaEnfermedad->nombre }}</option>
        @endforeach
    </select>
</div>

<div class="form-group" onclick="ocultarLugar();">
    <label for="">Recibe tratamiento?</label>
    <br>
    <input type="radio" name="tratamiento" value="false" checked> No<br>
    <input id="radioTrue" type="radio" name="tratamiento" value="true" @isset($situacionSaludEnfermedad)
        {{ $situacionSaludEnfermedad->tratamiento==true ? 'checked' : '' }} @endisset> Si<br>

</div>

<div class="form-group" id="form_lugar_tratamiento" style=
@if(isset($situacionSaludEnfermedad)) 
    {{ $situacionSaludEnfermedad->tratamiento==false ? "display:none" : "display:block" }}
@else
   {{ "display:none" }} 
@endif
>
    <label for="">Lugar de Tratamiento</label>
    <select name="lugar_tratamiento_id" form="form" class="select2" style="width:400px;">
        @foreach ($centrosSalud as $centroSalud)
        <option value={{ $centroSalud->id }} @isset($situacionSaludEnfermedad)
            {{ $centroSalud->id == $situacionSaludEnfermedad->lugar_tratamiento_id ? 'selected' : '' }} @endisset>
            {{ $centroSalud->nombre }}</option>
        @endforeach
    </select>
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