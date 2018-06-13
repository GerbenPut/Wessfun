@extends('Layouts.master')

@section('content')
    <div class="blog-post">
        <h2 class="blog-post-title">{{$advertisement->advertisement}}</h2>
        <p>{{$advertisement->description}}</p>

    </div>
@endsection