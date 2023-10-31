
    @csrf
    <div class="form-group">
            <input type="hidden" name="situacion_salud_id" class="form-control" id="" value={{ isset($situacionsaludenfermedad) ? $situacionsaludenfermedad->situacion_salud_id : $situacionsalud->id}}>
    </div>
    

    <div class="form-group">
            <label for="">Enfermedad</label>
            <select name="enfermedad_id" form="form" class="select2" style="width:400px;">
                @if (isset($enfermedads))
                    @foreach ($enfermedads as $enfermedad)
                        <option value={{ $enfermedad->id }}>{{ $enfermedad->nombre }}</option>
                    @endforeach
                @endif
            </select>
    </div>

    <div class="form-group">
            <label for="">Recibe tratamiento?</label>
            <br>
            <input type="radio" name="tratamiento" value="true" 
            @if(isset($situacionsaludenfermedad))
                {{$situacionsaludenfermedad->tratamiento==true ? 'checked' : ''}}
            
            @endif
            > Si<br>
            <input type="radio" name="tratamiento" value="false"
            @if(isset($situacionsaludenfermedad))
                {{$situacionsaludenfermedad->tratamiento==false ? 'checked' : ''}}
            @else
                checked
            @endif
            > No<br>  
        </div>

        <div class="form-group">
                <label for="">Lugar de Tratamiento</label>
                <select name="lugar_tratamiento_id" form="form" class="select2" style="width:400px;">
                    @if (isset($centrosaluds))
                        @foreach ($centrosaluds as $centrosalud)
                            <option value={{ $centrosalud->id }}>{{ $centrosalud->nombre }}</option>
                        @endforeach
                    @endif
                </select>
        </div>

        <div class="form-group">
                <input type="hidden" name="url" class="form-control" id="" value={{URL::previous()}}>
        </div>




