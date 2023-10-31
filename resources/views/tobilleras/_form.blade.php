<div class="form-group">
    <label for="">Numero de TUC</label>
<input type="number" name="numeroTuc" value="{{ isset($tobillera) ? $tobillera->numeroTuc : '' }}" class="form-control" id="">
</div>

<div class="form-group">
    <select name="historias_id" form="form" class="select2" style="width:400px;">
        @foreach ($historias as $historia)
            <option value={{ $historia->id }}
                @if(isset($tobillera))
                    {{$tobillera->historia->id==$historia->id ? 'selected' : ''}}
                @endif
            >
            {{ $historia->interno->nombre }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <input type="hidden" name="url" class="form-control" id="" value={{URL::previous()}}>
</div>