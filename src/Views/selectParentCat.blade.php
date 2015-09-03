<div class="form-group">
    <label>{{ $label }}</label>
        <select class="form-control search-select" name="{{$name}}">
            <option value="0">{{trans('admin.emptyOptionSelect')}}</option>
            {!! $category_select !!}
        </select>

</div>