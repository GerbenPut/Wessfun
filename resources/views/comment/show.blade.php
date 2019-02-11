@extends('CommentLayouts.master')

@section('content')

    <div class="blog-post">
        <p>{{$comment->message}}</p>

    </div>
    <a href="https://wessfun.recoded.nl/comment">Back to comment</a>
@endsection
