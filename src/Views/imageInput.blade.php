<div class="form-group">
    <label for="{{$name}}">{{$label}}</label>
    <input type="file" class="form-control" name="{{$name}}">
</div>

@if(!empty($value))

    <img src="/images/{{$value}}" class="img-responsive">
    <a href="/cpl/{{$type}}/delImage/{{$id}}" onClick="if (! confirm('{{ trans( 'admin.delMsg' ) }} ')) return false;"
       class="btn btn-danger pull-right">
        <i class="fa fa-trash-o"></i>
    </a>

    <div class="clearfix"></div>

@endif
