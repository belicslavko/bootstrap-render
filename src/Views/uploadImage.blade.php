<div class="gallery">
    <ul class="unstyled list-inline" id='img-list'>

        @if(!empty($images))
            @foreach($images as $im)

                <li id="list_{{ $im->id }}" class="col-md-6 col-lg-4">
                    <div class="picture handle">

                        <div class="panel panel-default text-center">
                            <div class="panel-body">
                                <a href="/images/{{ $im->image}}" class="preview">
                                    <img src="/images/{{ $im->image_small }}" class="img-responsive">
                                </a>
                            </div>

                            <div class="panel-footer text-center">
                                <div class="row">
                                    <div class="col-md-12">
                                        <textarea class="form-control"
                                                  id="imgName{{$im->id}}">{{ $im->name }}</textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="input-group">
                                            <span class="">
                                        @if($im->slider_img == 1)
                                                    <input style="margin-top: 10px" type="checkbox" checked value="0"
                                                           id="slider_img{{$im->id}}">
                                                @else
                                                    <input style="margin-top: 10px" type="checkbox" value="1"
                                                           id="slider_img{{$im->id}}">
                                                @endif
                                                <br>{{ trans('admin.sliderImage') }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="btn-group">
                                            <a class="btn btn-default btn-xs" onclick="changeImgName('{{$im->id}}')">
                                                <i class="fa fa-floppy-o"></i>
                                            </a>
                                            <a href="/cpl/images/del/{{$im->id}}"
                                               onClick="if (! confirm('{{ trans( 'admin.delMsg' ) }} ')) return false;"
                                               class="btn btn-danger btn-xs">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </li>

            @endforeach
        @endif

    </ul>
</div>


<script>

    function changeImgName(id) {

        var $_token = $('#token').val();
        var name = $("#imgName" + id).val();
        var slider_img = $("#slider_img" + id).val();

        $.ajax({
            type: "POST",
            headers: {'X-XSRF-TOKEN': $_token},
            url: "/cpl/images/changeName",
            data: {id: id, name: name, slider_img: slider_img}
        });


    }

    jQuery(function ($) {

        var $_token = $('#token').val();

        $("#img-list").sortable({
            handle: '.handle',
            forceHelperSize: true,
            forcePlaceholderSize: true,
            opacity: 0.8,
            placeholder: "img-list-highlight",
            update: function () {
                var order = $('#img-list').sortable('serialize');

                $.ajax({
                    type: "POST",
                    headers: {'X-XSRF-TOKEN': $_token},
                    url: "/cpl/images/sortImages",
                    data: order,
                });

            }
        });

        $("#img-list").disableSelection();
    });
</script>