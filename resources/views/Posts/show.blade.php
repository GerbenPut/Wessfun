@extends('PostsLayouts.master')

@section('content')
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">{{ $post->title }}</h1>
            <p>{{ $post->content }}</p>
        </div>
    </div>
@endsection