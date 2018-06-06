
    <div class="blog-post">
        <h2 class="blog-post-title">{{$image->title}}</h2>
        <p>{{$image->description}}</p>
        <img src="{{$image->url}}" style="height: 50%; width: auto">
    </div>
    <a href="http://127.0.0.1:8000/">Back to home</a>
    <a href="http://127.0.0.1:8000/comment">Create comment</a>
   {{-- <a href="http://127.0.0.1:8000/images/{Image}/edit">Edit post</a>--}}
