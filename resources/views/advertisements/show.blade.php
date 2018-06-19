<head>
    <link href="{{asset('scss/style.scss')}}" rel="stylesheet">
</head>

@extends('Layouts.master')

@section('content')
    <body id="top-image">
    <div id="content"></div>
    <div class="blog-post">
        <h2 class="blog-post-title">{{$advertisement->Company}}</h2>
        <img src="{{$advertisement->URL}}">
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


    <script>
        $(document).ready(function () {
            var movementStrength = 25;
            var height = movementStrength / $(window).height();
            var width = movementStrength / $(window).width();
            $("#top-image").mousemove(function (e) {
                var pageX = e.pageX - ($(window).width() / 2);
                var pageY = e.pageY - ($(window).height() / 2);
                var newvalueX = width * pageX * -1 - 25;
                var newvalueY = height * pageY * -1 - 50;
                $('#top-image').css("background-position", newvalueX + "px     " + newvalueY + "px");
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