<head>
    <link href="{{asset('scss/style.scss')}}" rel="stylesheet">
</head>

@extends('layouts.app')
@section('content')
    <body id="top-image">
    <div id="content"></div>
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
                                    {!! Form::open(['url' => 'images/'.$image->id , 'method' => 'PATCH']) !!}
                                    {!! Form::token() !!}

                                    <div class="form-group">
                                        {!! Form::label('title', 'Title'); !!}
                                        {!! Form::text('title', $image->title ,array('class' => 'form-control'))!!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('description', 'Description'); !!}
                                        {!! Form::textarea('description', $image->description ,array('class' => 'form-control', 'rows' => '3'))!!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('sort', 'Sort'); !!}
                                        {!! Form::select('sort', array('Video' => 'Video (must be embed)', 'Photo' => 'Photo'), 'S');!!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('category_id', 'Category') !!}
                                        {!! Form::select('category_id', $categories);!!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('url', 'Url'); !!}
                                        {!! Form::text('url', $image->url ,array('class' => 'form-control'))!!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::submit('Submit', array('class' => 'backbutton')); !!}
                                        {!! Form::close() !!}
                                    </div>

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <form action="http://127.0.0.1:8000">
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

    <style>
        body {
            background-image: url("https://i.pinimg.com/originals/51/d6/81/51d6817f464288f5be2f5fe29c6ffb54.jpg");
        }
    </style>

    <script>
        var $win = $(window),
            w = 0, h = 0,
            rgb = [],
            getWidth = function () {
                w = $win.width();
                h = $win.height();
            };

        $win.resize(getWidth).mousemove(function (e) {

            rgb = [
                Math.round(e.pageX / w * 255),
                Math.round(e.pageY / h * 255),
                150
            ];

            $('#content').css('background', 'rgb(' + rgb.join(',') + ')');

        }).resize();
    </script>
    <style>
        #content {
            height: 100%;
            background: -webkit-linear-gradient(270deg, #4ac1ff, #795bb0);
            background: linear-gradient(180deg, #4ac1ff, #795bb0);
            position: fixed;
            width: 100%;
            opacity: 0.1;
        }
    </style>
    </body>

@endsection



