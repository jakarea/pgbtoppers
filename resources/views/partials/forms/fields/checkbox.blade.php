
<div class="is-checkbox">
    <label>
        <input type="checkbox" name="{{$name}}" {{ old($name) == '1' ? 'checked' : '' }}>
        <span class="custom-checkbox"></span>
        <span>{{$attribute}}</span>
    </label> 
</div>
<p class="label-error" style="color: red; margin-top: 0px;">{{ $errors->first($name) }}</p>
