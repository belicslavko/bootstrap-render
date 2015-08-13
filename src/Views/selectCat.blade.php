<div class="form-group">
    <label>{{ $label }}</label>
    @if(!empty($value))
        <select class="form-control search-select" name="{{$name}}" onchange="getAttributesSelect(this.value, {{ $value }})">
    @else
        <select class="form-control search-select" name="{{$name}}" onchange="getAttributes(this.value)">
    @endif
            <option>{{trans('admin.emptyOptionSelect')}}</option>
            {!! $category_select !!}
        </select>

</div>