@extends('layouts.app')
<head>
    <link href="{{asset('scss/style.scss')}}" rel="stylesheet">
</head>
@section('content')
    <div id="content">

    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
            z-index: -1;
            height: 100%;
            background: -webkit-linear-gradient(270deg, #4ac1ff, #795bb0);
            background: linear-gradient(180deg, #4ac1ff, #795bb0);
            position: fixed;
            width: 100%;
            opacity: 1;
        }
    </style>
@endsection
