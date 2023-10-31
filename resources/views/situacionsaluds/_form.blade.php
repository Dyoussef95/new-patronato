@csrf
<div class="form-group needs-validation">
    <label for="">Tiene cobertura medica?</label>
    <br>
    <input type="radio" name="cobertura_medica" value="true"
    @if(isset($situacionsalud))
        {{$situacionsalud->cobertura_medica==true ? 'checked' : ''}}
    @endif
    > Si<br>
    <input type="radio" name="cobertura_medica" value="false"
    @if(isset($situacionsalud))
        {{$situacionsalud->cobertura_medica==false ? 'checked' : ''}}
    @endif
    > No<br>  
</div>

<div class="form-group">
    <input type="hidden" name="interno_id" class="form-control" id="" value="{{ isset($situacionsalud) ? $situacionsalud->interno->id : $interno->id}}">
</div>

<div class="form-group">
        <input type="hidden" name="url" class="form-control" id="" value={{URL::previous()}}>
</div>


