<div class="blog-post">
        <h2 class="blog-post-title">{{$image->title}}</h2>
        <p>{{$image->description}}</p>
        <img src="{{$image->url}}" style="height: 50%; width: auto">
</div>
<a href="http://127.0.0.1:8000/">Back to home</a>

@foreach ($image->comments as $comment)
    <h1>{{$comment->title}}</h1>
    <p>{{$comment->message}}</p>
@endforeach

