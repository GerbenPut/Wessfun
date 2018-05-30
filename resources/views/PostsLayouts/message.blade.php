@if (session('correct'))

    <div class="col-md-12 blog main">

        <div class="alert alert-success">
            {{ session('correct') }}
        </div>
    </div>
@endif

@if(session('wrong'))
    <div class="col-md-12 blog-main">

        <div class="aler alert-danger">
            {{ session('wrong') }}
        </div>
    </div>
@endif