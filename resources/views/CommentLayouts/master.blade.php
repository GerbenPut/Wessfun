<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://i.ibb.co/ryhZRXL/wessfun.png" type="image/gif" sizes="16x16">

    <title>Wessfun</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="//fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
</head>

<body>
<header class="top-header">
    @include('CommentLayouts.app')
</header>

{{--top header ends--}}
{{--main-div starts--}}
<div class="main-divcomment">
    @yield('content')
    <main role="main">


            {{--Hier komt de lijst met tags--}}
            {{--@include('layouts.tags')--}}
    </main>

</div>
{{--main-div ends--}}
<footer class="bottomfooter">
    {{--Hier komt ??--}}
    {{--Dit deel moet meebewegen als je scrolled--}}
</footer>

</body>
@yield('scripts')
</html>

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

