<div class="card">
    <div class="card-body">
        <h4 class="card-title">Oficio</h4>
        @include('oficios._form')
    </div>
</div>
<br>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Tutelado</h4>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Nombres y Apellidos</span>
            </div>
            <input required type="text" name="nombre" value="{{isset($historia)?$historia->interno->nombre:''}}" class="form-control" id="" placeholder="Ingrese los nombres">
            <input required type="text" name="apellido" value="{{isset($historia)?$historia->interno->apellido:''}}" class="form-control" id="" placeholder="Ingrese los apellidos">
        </div>
        @error('nombre')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <div class="form-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Fecha de inicio del tutelado:</span>
            </div>
            <input required type="date" name="fecha_inicio" value="{{isset($historia) ? $historia->fecha_inicio : $hoy}}" class="form-control" id="fecha_inicio">
        </div>

        <div class="form-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Regimen:</span>
            </div>
            <select name="regimen_id" form="form" class="select2" style="width: 100%">
                @if (isset($regimenes))
                @foreach ($regimenes as $regimen)
                <option value={{ $regimen->id }} @isset($historia->regimen)
                    {{$historia->regimen->id==$regimen->id ? 'selected' : ''}}
                    @endisset
                    >{{ $regimen->nombre }}</option>
                @endforeach
                @endif
            </select>
        </div>

        <div class="form-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Profesional:</span>
            </div>
            <select name="empleado_id" form="form" class="select2" style="width: 100%">
                @if (isset($empleados))
                @foreach ($empleados as $empleado)
                <option value={{ $empleado->id }} @isset($historia) {{$historia->empleado()->first()->id==$empleado->id ? 'selected' : ''}} @endisset>{{ $empleado->apellido }}&nbsp{{ $empleado->nombre }}</option>
                @endforeach
                @endif
            </select>
        </div>

        <div class="form-group">
            <input type="hidden" name="legajo" class="form-control" id="" value="{{isset($historia) ? $historia->interno->legajo : $nuevoLegajo}}">
        </div>
    </div>
</div>



<div class="form-group">
    <input type="hidden" name="url" class="form-control" id="" value={{URL::previous()}}>
</div>
