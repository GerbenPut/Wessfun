@extends('CommentLayouts.master')

@section('content')

    <div class="blog-post">
        <h2 class="blog-post-title">{{$comment->titel}}</h2>
        <p>{{$comment->message}}</p>

    </div>

@endsection