<head>
    <link href="{{asset('scss/style.scss')}}" rel="stylesheet">
</head>
<article class="main-article">
    @foreach ($images as $image)
        <header class="main-images-header">
            {{--Hier komt de titel en description van de media--}}
        {{$image->title}}
        </header>
        <div class="main-image">
            {{--Hier komt de Gif/Image/video--}}

                        <a href="images/{{$image->id}}">     <img src="{{$image->url}}" style="height: auto; width: 80%;"> </a>
                <br>
                        <a href="http://127.0.0.1:8000/comment">comment</a>
                    <hr>

            @endforeach
        </div>
        <footer class="main-images-footer">
            {{--Hier komt het voten per media--}}
        </footer>
</article>
