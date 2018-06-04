@extends('CommentLayouts.master')

@section('content')

    <div class="blog-post">
        <h2 class="blog-post-title">{{$comment->title}}</h2>
        <p>{{$comment->message}}</p>

    </div>
    <a href="http://127.0.0.1:8000/comment">Back to comment</a>
@endsection