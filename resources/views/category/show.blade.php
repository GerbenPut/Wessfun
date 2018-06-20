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
        @foreach ($categories as $kaas)
            @if($kaas->category=='NSFW (18+)')
                <p class="category2">
                    <a href="{{ route('categories.show', $kaas) }}">{{$kaas->category}}</a>
                    <br>
                </p>
            @else
                <p class="category">
                    <a href="{{ route('categories.show', $kaas) }}">{{$kaas->category}}</a>
                    <br>
                </p>
            @endif
        @endforeach
        <form action="http://127.0.0.1:8000">
            <input style="width: 80%; margin-left: 10%;" class="backbutton" type="submit" value="Back to homepage"/>
        </form>

    </section>
    <main role="main">
        <div class="main-tags">
            {{--Hier komt de lijst met tags--}}
            {{--@include('layouts.tags')--}}
        </div>
        <section class="main-images">
            <div>
                @foreach($category->images->reverse() as $image)
                    <div class="articlemargin">
                        <article class="main-article">
                            <header class="main-images-header">
                                {{--Hier komt de titel en description van de media--}}

                                <a class="imagelink" href="http://127.0.0.1:8000/images/{{$image->id}}">
                                    <td>{{$image->title}}</td>
                                </a>
                            </header>

                            <div class="main-image">
                                {{--Hier komt de Gif/Image/video--}}
                                {{--<img src="{{$image->url}}" style="height: 50%; width: auto">--}}

                                @if($image->sort=='Video')
                                    <video class="postimage" controls>
                                        <source src="{{$image->url}}" type="video/mp4">
                                        <source src="{{$image->url}}" type="video/ogg">
                                    </video>
                                @else
                                    <a class="imagelink" href="http://127.0.0.1:8000/images/{{$image->id}}"> <img
                                                class="postimage" src="{{$image->url}}"> </a>
                                @endif

                            </div>

                            <footer class="main-images-footer">
                                {{--Hier komt het voten per media--}}
                            </footer>
                        </article>
                        @role('Admin', 'web')
                        <td><a href="{{URL::to('images/'.$image->id.'/edit')}}">
                                <button class="editbtn" type="submit">Edit</button>
                            </a></td>
                        <td>{{ Form::open(array('url' => 'images/'.$image->id)) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Delete', array('class' => 'deletebtn')) }}
                            {{ Form::close() }}
                        </td>
                        @endrole
                    </div>
                @endforeach
            </div>
            {{--@yield('image')--}}
        </section>
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

<audio class="musicplayer" style="position: fixed " controls>
    <source src="horse.ogg" type="audio/ogg">
    <source src="https://instaud.io/_/2iXr.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>
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

