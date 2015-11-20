<hr>
<label>{{$label}}:</label>
<div class="form-group">

    <?php

    $check = new \App\Http\Controllers\Admin\LngController();

    $helper = new \App\Http\Controllers\Admin\HelperController();

    ?>
    @foreach($lng as $l)
        @if(!$check->ifExistOnLng($type, $value->id, $l->language_code))

            <!--label{{ $l->name }}</label-->
            <div class="row">

                <div class="form-inline">
                    <div class="col-xs-8">
                        <select class="form-control" id="js-select-ajax-{{$l->language_code}}"></select>
                    </div>
                    <div class="col-xs-4">
                        <button type="button"
                                onclick="linkIt($('#js-select-ajax-<?php echo $l->language_code; ?>').val(), <?php echo $value->id ?>)"
                                class="btn btn-primary btn-xs"><i
                                    class="fa fa-link"></i> {{ trans('admin.linkedOn') }} {{ $l->name }}</button>
                    </div>

                </div>
            </div>

        @endif
    @endforeach
</div>




<script>
    $(function () {

        function formatRepo(repo) {
            if (repo.loading) return repo.<?php echo $title_name; ?>;
            var markup = '<div class="clearfix">' +
                    '<div class="col-sm-12">' + repo.<?php echo $title_name; ?> + '</div>' +
                    '</div>';
            return markup;
        }

        function formatRepoSelection(repo) {
            return repo.<?php echo $title_name; ?>;
        }


        @foreach($lng as $l)
            $("#js-select-ajax-<?php echo $l->language_code; ?>").select2({
                    ajax: {
                        url: "/cpl/<?php echo $helper->typeToSlug($type); ?>/ajax-<?php echo $helper->typeToSlug($type); ?>-all?lng=<?php echo $l->language_code; ?>",
                        dataType: 'json',
                        delay: 250,
                        data: function (params) {
                            return {
                                q: params.term, // search term
                                page: params.page
                            };
                        },
                        processResults: function (data, page) {
                            return {
                                results: data.data
                            };
                        },
                        cache: true
                    },
                    escapeMarkup: function (markup) {
                        return markup;
                    }, // let our custom formatter work
                    minimumInputLength: 1,
                    templateResult: formatRepo, // omitted for brevity, see the source of this page
                    templateSelection: formatRepoSelection // omitted for brevity, see the source of this page

                });

        @endforeach



    });


</script>

<script>
    function linkIt(select_value, id) {

        //alert(select_value + ' ' + id);

        $.ajax({
            type: "get",
            url: "/cpl/duplicate/link/<?php echo $type; ?>/" + select_value + '/' + id,

        }).done(function () {
           location.reload();
        });

    }
</script>