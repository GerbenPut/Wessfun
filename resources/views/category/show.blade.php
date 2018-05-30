@extends('Layouts.master')

@section('content')

    <div class="blog-post">
        <h2 class="blog-post-title">{{$category->category}}</h2>
        <p>{{$category->description}}</p>

    </div>

@endsection