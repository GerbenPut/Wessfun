<head>
    <link href="{{asset('scss/style.scss')}}" rel="stylesheet">
</head>

@extends('CommentLayouts.master')
@section('content')
    <body id="top-image">
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Comments</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="categoriesindex">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<div class="card-body">
    <form action="{{ route('comment.search') }}" method="post" class="ajaxSearch">
        <input type="search" name="query" placeholder="Type something to search" autocomplete="off">
        <input type="submit" value="Search">
    </form>
        <div id="results">
            <span>Loading...</span>
        </div>
</div>
@endsection

@section('scripts')
<script>
    var searchTimer = null;

    $('body').on('submit', 'form.ajaxSearch', function (e) {
        var form = $(this);

        ajaxSearch(form);
        return false;
    });

    $('body').on('keyup', 'form.ajaxSearch input[type=search]', function() {
        var form = $(this).closest('form.ajaxSearch');

        if(form) {
            if(searchTimer !== null) clearInterval(searchTimer);

            searchTimer = setTimeout(function() {
                ajaxSearch(form);
            }, 800);
        }
    });

    $(document).ready(function() {
        ajaxSearch($('form.ajaxSearch'));
    });

    var ajaxSearch = function(form) {
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            method: form.attr('method'),
            data: {"query": form.find('input[name=query]').val(), "_token": "{{ csrf_token() }}"}
        }).done(function (res) {
            $('#results').html(res);
        }).fail(function (res) {
            alert('Failed search');
        });
    }
</script>
</tbody>
</table>
</div>
    <form action="{{ url('/admin')}}">
        <input class="backbutton" type="submit" value="Back" />
    </form>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
</div>
</div>
</div>
</div>
</div>
</body>
@endsection
