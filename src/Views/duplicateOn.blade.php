<div class="form-group">
    <label>{{$label}}:</label>

    <div class="row">
        <div class="col-xs-12">
            <?php $check = new \App\Http\Controllers\Admin\LngController(); ?>
            @foreach($lng as $l)
                @if(!$check->ifExistOnLng($type, $value->id, $l->language_code))
                    <a href="{{$slug}}{{$l->language_code}}/{{$value->id}}" class="btn btn-primary btn-xs">{{ $l->name }}</a>
                @endif
            @endforeach
        </div>
    </div>
</div>