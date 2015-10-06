<div class="form-group">
    <label>{{ $label }}</label>
    <label class="checkbox-inline">

        @if($value == 1)
            <input type="checkbox" name="{{$name}}" checked value="1">&nbsp;
        @else
            <input type="checkbox" name="{{$name}}" value="1">&nbsp;
        @endif

    </label>

</div>