<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <a href="/cpl/{{$slug}}?lng={{HelperAdmin::getLng()}}" class="btn btn-primary btn-circle"
               data-toggle="tooltip" data-placement="top" title="{{trans('admin.tooltipBackToList')}}">
                <i class="fa fa-chevron-left"></i>
            </a>
            {{ $title }}
            <a href="/cpl/{{$slug}}/new?lng={{HelperAdmin::getLng()}}" class="btn btn-primary btn-circle"
               data-toggle="tooltip" data-placement="top" title="{{trans('admin.tooltipCreateNew')}}">
                <i class="fa fa-plus"></i>
            </a>
        </h1>
    </div>
    <!-- /.col-lg-12 -->
</div>