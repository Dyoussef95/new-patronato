@csrf

<div class="form-group">
    <label for="">Nombre</label>
<input type="text" name="nombre" value="{{ isset($regiman) ? $regiman->nombre : '' }}" class="form-control" id="" placeholder="Ingrese un nombre">
</div>

<div class="form-group">
    <select name="area_id" form="form" class="select2" style="width:400px;">
        @foreach ($areas as $area)
            <option value={{ $area->id }}
                @if(isset($regiman))
                    {{$regiman->area->id==$area->id ? 'selected' : ''}}
                @endif
            >
            {{ $area->nombre }}</option>
        @endforeach
    </select>
</div>


<div class="form-group">
    <input type="hidden" name="url" class="form-control" id="" value={{URL::previous()}}>
</div>