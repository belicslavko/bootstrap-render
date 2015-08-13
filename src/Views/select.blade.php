<div class="form-group">
    <label>{{ $label }}</label>

    <select class="form-control" name="{{$name}}">
        <option>{{trans('admin.emptyOptionSelect')}}</option>
        @foreach($select as $k => $v)

            @if($k == $value)
                <option value="{{$k}}" selected>{{$v}}</option>
            @else
                <option value="{{$k}}">{{$v}}</option>
            @endif

        @endforeach
    </select>

</div>