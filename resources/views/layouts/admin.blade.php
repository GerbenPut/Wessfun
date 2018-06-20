@extends('layouts.app')
<head>
    <link href="{{asset('scss/style.scss')}}" rel="stylesheet">
</head>
@section('content')
    <body id="top-image">
    <br><br>
        <form style="width: 30%; float: left; margin-left: 19%;" action="http://127.0.0.1:8000/advertisements">
            <input class="backbutton" type="submit" value="Advertisements"/>
        </form>
        <form style="width: 30%; float: right; margin-right: 19%;" action="http://127.0.0.1:8000/categories">
            <input class="backbutton" type="submit" value="Categories"/>
        </form>
        <form style="width: 30%; float: left; margin-left: 19%;" action="http://127.0.0.1:8000/comment">
            <input class="backbutton" type="submit" value="Comments"/>
        </form>
        <form style="width: 30%; float: right; margin-right: 19%;" action="http://127.0.0.1:8000/tags">
            <input class="backbutton" type="submit" value="Tags"/>
        </form>
        <form style="width: 30%; float: left; margin-left: 19%;" action="http://127.0.0.1:8000/merch">
            <input class="backbutton" type="submit" value="Merch"/>
        </form>
    </div>
    <form action="http://127.0.0.1:8000">
        <input style="width: 50%; margin-left: 25%;" class="backbutton" type="submit" value="Back to homepage"/>
    </form>
    </body>


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
@endsection


