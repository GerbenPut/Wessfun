<head>
    <link href="{{asset('scss/style.scss')}}" rel="stylesheet">
</head>

@extends('layouts.app')
@section('content')
    <body id="top-image">
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">advertisements</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                            <form action="{{ route('advertisements.search') }}" method="POST" class="ajaxSearch">
                                <input type="search" name="query" placeholder="Type something to search" autocomplete="off">
                                <input type="submit" value="Search">
                            </form>

                        <div class="advertisementsindex">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Nr</th>
                                    <th scope="col">Company</th>
                                    <th scope="col">Url</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                                </thead>
                                <tbody id="results">
                                    <tr>
                                        <td colspan="5">Loading...</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="createform">
                            {!! Form::open(['url' => 'advertisements', 'method' => 'POST']) !!}
                            {!! Form::token() !!}

                            <div class="form-group">
                                {!! Form::label('Company', 'company'); !!}
                                {!! Form::text('Company', '',['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('URL', 'url'); !!}
                                {!! Form::textarea('URL', '',['class' => 'form-control', 'rows' => '3']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::submit('Submit', ['class' => 'backbutton']); !!}
                                {!! Form::close() !!}
                            </div>

                            <form action="http://127.0.0.1:8000/admin">
                                <input class="backbutton" type="submit" value="Back"/>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
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
                url: form.attr('action') + '/',
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
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var movementStrength = 25;
            var height = movementStrength / $(window).height();
            var width = movementStrength / $(window).width();
            $("#top-image").mousemove(function(e){
                var pageX = e.pageX - ($(window).width() / 2);
                var pageY = e.pageY - ($(window).height() / 2);
                var newvalueX = width * pageX * -1 - 25;
                var newvalueY = height * pageY * -1 - 50;
                $('#top-image').css("background-position", newvalueX+"px     "+newvalueY+"px");
            });
        });
    </script>
    </body>
@endsection


