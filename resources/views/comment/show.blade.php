@extends('CommentLayouts.master')

@section('content')

    <div class="blog-post">
        <p>{{$comment->message}}</p>

    </div>
    <a href="http://127.0.0.1:8000/comment">Back to comment</a>
@endsection