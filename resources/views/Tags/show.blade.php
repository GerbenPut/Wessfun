@extends('Layouts.master')

@section('content')

    <div class="blog-post">
        <h2 class="blog-post-title">{{$tag->title}}</h2>
        <p>{{$tag->message}}</p>

    </div>
    <a href="http://127.0.0.1:8000/tags">Back to tag</a>
@endsection