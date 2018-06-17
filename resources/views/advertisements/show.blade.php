@extends('Layouts.master')

@section('content')
    <div class="blog-post">
        <h2 class="blog-post-title">{{$advertisement->Company}}</h2>
        <img src="{{$advertisement->URL}}">
    </div>
@endsection