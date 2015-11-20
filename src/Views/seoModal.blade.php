

<div class="clearfix"></div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#seoModal">
    <i class="fa fa-globe"></i> SEO
</button>

<!-- Modal -->
<div class="modal fade" id="seoModal" tabindex="-1" role="dialog" aria-labelledby="SeoModal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">SEO </h4>

            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <fieldset>
                            <legend>{{trans('admin.meta_title')}}</legend>

                            <div class="form-group serialize-input">
                                <label>{{trans('admin.title')}}</label>
                                <input type="text" class="form-control" name="seo_title"
                                       value="@if(!empty($seo->seo_title)){{$seo->seo_title}}@endif">
                            </div>
                            <div class="form-group serialize-input">
                                <label>{{trans('admin.description')}}</label>
                                <input type="text" class="form-control" name="seo_description"
                                       value="@if(!empty($seo->seo_description)){{$seo->seo_description}}@endif">
                            </div>
                            <div class="form-group serialize-input">
                                <label>{{trans('admin.keywords')}}</label>
                                <input type="text" class="form-control" name="seo_keywords"
                                       value="@if(!empty($seo->seo_keywords)){{$seo->seo_keywords}}@endif">
                            </div>
                        </fieldset>

                        <fieldset>
                            <legend>{{trans('admin.shema_title')}}</legend>
                            <div class="form-group serialize-input">
                                <label>{{trans('admin.go_name')}}</label>
                                <input type="text" class="form-control" name="go_name"
                                       value="@if(!empty($seo->go_name)){{$seo->go_name}}@endif">
                            </div>
                            <div class="form-group serialize-input">
                                <label>{{trans('admin.go_description')}}</label>
                                <input type="text" class="form-control" name="go_description"
                                       value="@if(!empty($seo->go_description)){{$seo->go_description}}@endif">
                            </div>
                            <div class="form-group serialize-input">
                                <label>{{trans('admin.go_image')}}</label>
                                <input type="text" class="form-control" name="go_image"
                                       value="@if(!empty($seo->go_image)){{$seo->go_image}}@endif">
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>{{trans('admin.twitter_title')}}</legend>


                            <div class="form-group serialize-input">
                                <label>{{trans('admin.tw_card')}}</label>
                                <input type="text" class="form-control" name="tw_card"
                                       value="@if(!empty($seo->tw_card)){{$seo->tw_card}}@endif">
                            </div>
                            <div class="form-group serialize-input">
                                <label>{{trans('admin.tw_site')}}</label>
                                <input type="text" class="form-control" name="tw_site"
                                       value="@if(!empty($seo->tw_site)){{$seo->tw_site}}@endif">
                            </div>
                            <div class="form-group serialize-input">
                                <label>{{trans('admin.tw_title')}}</label>
                                <input type="text" class="form-control" name="tw_title"
                                       value="@if(!empty($seo->tw_title)){{$seo->tw_title}}@endif">
                            </div>
                            <div class="form-group serialize-input">
                                <label>{{trans('admin.tw_description')}}</label>
                                <input type="text" class="form-control" name="tw_description"
                                       value="@if(!empty($seo->tw_description)){{$seo->tw_description}}@endif">
                            </div>
                            <div class="form-group serialize-input">
                                <label>{{trans('admin.tw_creator')}}</label>
                                <input type="text" class="form-control" name="tw_creator"
                                       value="@if(!empty($seo->tw_creator)){{$seo->tw_creator}}@endif">
                            </div>
                            <div class="form-group serialize-input">
                                <label>{{trans('admin.tw_image_src')}}</label>
                                <input type="text" class="form-control" name="tw_image_src"
                                       value="@if(!empty($seo->tw_image_src)){{$seo->tw_image_src}}@endif">
                            </div>
                        </fieldset>

                    </div>
                    <div class="col-md-6">
                        <fieldset>
                            <legend>{{trans('admin.facebook_title')}}</legend>

                            <div class="form-group serialize-input">
                                <label>{{trans('admin.fb_og_title')}}</label>
                                <input type="text" class="form-control" name="fb_og_title"
                                       value="@if(!empty($seo->fb_og_title)){{$seo->fb_og_title}}@endif">
                            </div>
                            <div class="form-group serialize-input">
                                <label>{{trans('admin.fb_og_type')}}</label>
                                <input type="text" class="form-control" name="fb_og_type"
                                       value="@if(!empty($seo->fb_og_type)){{$seo->fb_og_type}}@endif">
                            </div>
                            <div class="form-group serialize-input">
                                <label>{{trans('admin.fb_og_url')}}</label>
                                <input type="text" class="form-control" name="fb_og_url"
                                       value="@if(!empty($seo->fb_og_url)){{$seo->fb_og_url}}@endif">
                            </div>
                            <div class="form-group serialize-input">
                                <label>{{trans('admin.fb_og_image')}}</label>
                                <input type="text" class="form-control" name="fb_og_image"
                                       value="@if(!empty($seo->fb_og_image)){{$seo->fb_og_image}}@endif">
                            </div>
                            <div class="form-group serialize-input">
                                <label>{{trans('admin.fb_og_description')}}</label>
                                <input type="text" class="form-control" name="fb_og_description"
                                       value="@if(!empty($seo->fb_og_description)){{$seo->fb_og_description}}@endif">
                            </div>
                            <div class="form-group serialize-input">
                                <label>{{trans('admin.fb_og_site_name')}}</label>
                                <input type="text" class="form-control" name="fb_og_site_name"
                                       value="@if(!empty($seo->fb_og_site_name)){{$seo->fb_og_site_name}}@endif">
                            </div>
                            <div class="form-group serialize-input">
                                <label>{{trans('admin.fb_article_published_time')}}</label>
                                <input type="text" class="form-control" name="fb_article_published_time"
                                       value="@if(!empty($seo->fb_article_published_time)){{$seo->fb_article_published_time}}@endif">
                            </div>
                            <div class="form-group serialize-input">
                                <label>{{trans('admin.fb_article_modified_time')}}</label>
                                <input type="text" class="form-control" name="fb_article_modified_time"
                                       value="@if(!empty($seo->fb_article_modified_time)){{$seo->fb_article_modified_time}}@endif">
                            </div>
                            <div class="form-group serialize-input">
                                <label>{{trans('admin.fb_article_section')}}</label>
                                <input type="text" class="form-control" name="fb_article_section"
                                       value="@if(!empty($seo->fb_article_section)){{$seo->fb_article_section}}@endif">
                            </div>
                            <div class="form-group serialize-input">
                                <label>{{trans('admin.fb_article_tag')}}</label>
                                <input type="text" class="form-control" name="fb_article_tag"
                                       value="@if(!empty($seo->fb_article_tag)){{$seo->fb_article_tag}}@endif">
                            </div>
                            <div class="form-group serialize-input">
                                <label>{{trans('admin.fb_fb_admins')}}</label>
                                <input type="text" class="form-control" name="fb_fb_admins"
                                       value="@if(!empty($seo->fb_fb_admins)){{$seo->fb_fb_admins}}@endif">
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <p class="pull-left" id="saveText"></p>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" onclick="saveSeoModal()" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    function saveSeoModal() {

        var $_token = $('#token').val();
        var data = $('.serialize-input :input').serialize();

        $.ajax({
            type: "POST",
            headers: {'X-XSRF-TOKEN': $_token},
            url: "/cpl/seo/edit/{{$type}}/{{$id}}",
            data: data
        }).done(function() {
            $( "#saveText" ).html( '<span class="label label-success">Updated</span>' );
        }).fail(function() {
            $( "#saveText" ).html( '<span class="label label-danger">Error</span>' );
        });



    }
</script>