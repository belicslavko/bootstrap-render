@foreach ($error as $v => $m)

    <div class="row">
        <div class="col-lg-12">

            <div class="alert alert-danger" role="alert">{{ $m }}</div>

        </div>

    </div>

@endforeach