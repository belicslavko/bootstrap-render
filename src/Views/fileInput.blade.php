<div class="form-group">
    <label for="{{$name}}">{{$label}}</label>
    <input type="file" class="form-control" name="{{$name}}">
</div>

@if(!empty($value))

    <div class="input-group">
        <input type="text" class="form-control" value="/files/{{$value}}">
      <span class="input-group-btn">
        <a href="/cpl/files/del/{{$type}}/{{$id}}" class="btn btn-default" type="button"><i class="fa fa-trash-o"></i></a>
          <a target="_blank" href="/files/{{$value}}" class="btn btn-default" type="button"><i class="fa fa-link"></i></a>
      </span>
    </div>

@endif
