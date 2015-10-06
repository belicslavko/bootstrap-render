<div class="gallery">
    <ul class="unstyled list-inline" id='img-list'>

        @if(!empty($images))
            @foreach($images as $im)

                <li id="list_{{ $im->id }}" class="col-md-6">
                    <div class="picture handle">

                        <div class="panel panel-default text-center">
                            <div class="panel-body">
                                <a href="/images/{{ $im->image}}">
                                    <img src="/images/{{ $im->image_small }}">
                                </a>
                            </div>
                            <div class="panel-footer text-center">

                                <div class="btn-group btn-group-justified">
                                    <div class="btn-group">
                                <textarea class="form-control" rows="3" id="imgName{{$im->id}}">{{ $im->name }}</textarea>
                                        </div>

                                    <div class="btn-group">
                                <button class="btn btn-default" onclick="changeImgName('{{$im->id}}')" type="button">
                                    <i class="fa fa-edit"></i>
                                </button>
                                <a href="/cpl/images/del/{{$im->id}}" onClick="if (! confirm('{{ trans( 'admin.delMsg' ) }} ')) return false;" class="btn btn-danger">
                                    <i class="fa fa-trash-o"></i>
                                </a>
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

        $.ajax({
            type: "POST",
            headers: {'X-XSRF-TOKEN': $_token},
            url: "/cpl/images/changeName",
            data: {id: id, name: name}
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