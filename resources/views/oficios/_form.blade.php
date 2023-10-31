
<div class="form-group">
    <div class="input-group-prepend">
        <span class="input-group-text">Numero</span>
    </div>
    <input type="text" name="numero" value="{{ isset($oficio) ? $oficio->numero : '' }}" class="form-control" id="" placeholder="Ingrese el numero de oficio">
</div>

<div class="form-group">
    <div class="input-group-prepend">
        <span class="input-group-text">Fecha</span>
    </div>
    <input type="date" name="fecha" value="{{ isset($oficio) ? $oficio->fecha : '' }}" class="form-control" id="" placeholder="Ingrese la fecha">
</div>

<div class="form-group">
    <div class="input-group-prepend">
        <span class="input-group-text">Descripcion</span>
    </div>
    <textarea class="form-control" form="form" name="descripcion" aria-label="With textarea" placeholder="Ingrese una descripcion">{{ isset($oficio) ? $oficio->descripcion : '' }}</textarea>
</div>

<div class="form-group">
    <div class="input-group-prepend">
        <span class="input-group-text">Procedencia</span>
    </div>
    <select name="procedencia_id" form="form" class="select2">
        @if (isset($juzgados))
            @foreach ($juzgados as $juzgado)
                <option value={{ $juzgado->id }}>{{ $juzgado->nombre }}
                @isset($oficio))
                    {{ $oficio->procedencia_id==$juzgado->id? 'selected' : '' }}
                @endif
                </option>                
            @endforeach
            <option value=0 {{ empty($oficio) ? 'selected' : '' }} >NS/NC</option>
        @endif
    </select>
</div>

<div class="form-group">
    <input type="hidden" name="url" class="form-control" id="" value="{{URL::previous()}}">
</div>
