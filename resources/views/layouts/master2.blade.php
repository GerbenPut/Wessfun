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
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="{{asset('css/.css')}}" rel="stylesheet">
</head>
{{--top-header start--}}
<header class="top-header">
    <a href="{{ url('/') }}">Home</a>
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                {{--<a href="{{ url('/home') }}">Home</a>--}}
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif
</header>
{{--top header ends--}}
<body>
<div class="container">
    <main role="main" class="container">

    </main><!-- /.container -->
</div>
</body>
</html>