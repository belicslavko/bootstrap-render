<div class="row">
    <div class="col-md-6">
<div class="form-group">
    <label>{{trans('admin.editOn')}}:</label>

    <div class="row">
        <div class="col-xs-12">

            <?php $check = new \App\Http\Controllers\Admin\LngController(); ?>
            @foreach($lng as $l)

                @if($check->ifExistOnLng($type, $value->id, $l->language_code))
                    @if(HelperAdmin::getLng() != $l->language_code)
                        <a href="/{{Request::segment(1)}}/{{Request::segment(2)}}/{{Request::segment(3)}}/{{$check->getIdOnLng($value->id, $type, $l->language_code)}}?lng={{$l->language_code}}"
                           class="btn btn-success btn-xs"><i class="fa fa-edit"></i> {{ $l->name }}</a>
                    @endif
                @else

                @endif
            @endforeach
        </div>
    </div>
</div>
    </div>
    <div class="col-md-6">


        <div class="form-group">
    <label>{{$label}}:</label>

    <div class="row">
        <div class="col-xs-12">

            <?php $check = new \App\Http\Controllers\Admin\LngController(); ?>
            @foreach($lng as $l)
                @if(!$check->ifExistOnLng($type, $value->id, $l->language_code))
                    @if(HelperAdmin::getLng() != $l->language_code)
                        <a href="{{$slug}}{{$l->language_code}}/{{$value->id}}" class="btn btn-primary btn-xs"><i
                                    class="fa fa-copy"></i> {{ $l->name }}</a>
                    @endif
                @else

                @endif
            @endforeach
        </div>
    </div>
</div>
    </div>
</div>