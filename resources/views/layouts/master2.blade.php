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
    <link href="{{asset('scss/style.scss')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="//fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
</head>
<body>
{{--top-header start--}}
<header class="top-header">
    @include('Layouts.app')
</header>
{{--top header ends--}}
{{--main-div starts--}}
<div class="main-div">
    <section class="main-left-category">
        {{--Hier komen de categories--}}
        {{--Dit deel moet meebewegen als je scrolled--}}
        {{--@include('Images.show')--}}
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
</html>

<audio style="position: fixed; bottom: 0%;   box-shadow: 0 0px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.50);   border-top-right-radius: 10px; " controls autoplay>
    <source src="horse.ogg" type="audio/ogg">
    <source src="https://instaud.io/_/2iXr.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>

