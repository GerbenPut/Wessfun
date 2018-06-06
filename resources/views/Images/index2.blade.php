<article class="main-article">
        <header class="main-images-header">
            {{--Hier komt de titel en description van de media--}}
        </header>
        <div class="main-image">
            {{--Hier komt de Gif/Image/video--}}
            @foreach ($images as $image)
                        <a href="images/{{$image->id}}">     <img src="{{$image->url}}" style="height: 50%; width: auto"> </a>
                <br>
                        <a href="http://127.0.0.1:8000/comment">comment</a>
                    <hr>

            @endforeach
        </div>
        <footer class="main-images-footer">
            {{--Hier komt het voten per media--}}
        </footer>
</article>
