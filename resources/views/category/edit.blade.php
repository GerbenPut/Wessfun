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
                    <div class="card-header">Edit this post</div>
                    <div class="card-body">
                        <div class="advertisementsindex">
                            <div class="advertisementsindex">
                                <div class="createform">
                                    {!! Form::open(['url' => 'categories/'.$category->id , 'method' => 'PATCH']) !!}
                                    {!! Form::token() !!}

                                    <div class="form-group">
                                        {!! Form::label('category', 'category'); !!}
                                        {!! Form::text('category', $category->category ,array('class' => 'form-control'))!!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('description', 'description'); !!}
                                        {!! Form::textarea('description', $category->description,array('class' => 'form-control', 'rows' => '3'))!!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::submit('Submit', array('class' => 'backbutton')); !!}
                                        {!! Form::close() !!}
                                    </div>

                                    @if ($errors->any())
                                        <div>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <form action="https://wessfun.recoded.nl/categories">
                                        <input class="backbutton" type="submit" value="Back"/>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection
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



