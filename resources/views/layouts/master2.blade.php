<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Wessfun</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="//fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
</head>

<body id="top-image">
<div id="content"></div>
{{--top-header start--}}
<header class="top-header">
    @include('Layouts.app')
    <form action="http://127.0.0.1:8000/create">
        <input class="createbutton" type="submit" value="Create Post"/>
    </form>
</header>
{{--top header ends--}}
{{--main-div starts--}}
<div class="main-div">
    <section class="main-left-category">
        {{--Hier komen de categories--}}
        {{--Dit deel moet meebewegen als je scrolled--}}
        <header class="main-left-category-header">
            <p>Categories</p>
        </header>
        @foreach ($categories as $category)
            @if($category->category=='NSFW')
                <p class="category2">
                    <a href="{{ route('categories.show', $category) }}">{{$category->category}}</a>
                    <br>
                </p>
            @else
                <p class="category">
                    <a href="{{ route('categories.show', $category) }}">{{$category->category}}</a>
                    <br>
                </p>
            @endif
        @endforeach

    </section>
    <main role="main">
        <div class="main-tags">
            {{--Hier komt de lijst met tags--}}
            {{--@include('layouts.tags')--}}
        </div>
        <section class="main-images">
            @include('Images.index2')
            {{--@yield('image')--}}
        </section>
    </main>
    <section class="main-right">
        {{--Hier komt reclame???--}}
    </section>
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



