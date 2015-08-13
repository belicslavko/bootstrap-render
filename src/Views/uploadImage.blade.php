<div class="gallery">
    <ul class="unstyled  list-inline" id='img-list'>

        @if(!empty($images))
            @foreach($images as $im)

                <li id="list_{{ $im->id }}">
                    <div class="picture handle">

                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="/images/{{ $im->image}}">
                                    <img src="/images/{{ $im->image_small }}">
                                </a>
                            </div>
                            <div class="panel-footer text-center">
                                <a href="/cpl/images/del/{{$im->id}}" onClick="if (! confirm('{{ trans( 'admin.delMsg' ) }} ')) return false;" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </div>
                        </div>


                    </div>
                </li>

            @endforeach
        @endif

    </ul>
</div>


<script>
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