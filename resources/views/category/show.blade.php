@extends('layouts.master')

@section('content')
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">{{ $catagory->category }}</h1>
            <p>{{ $catagory->description }}</p>
        </div>
    </div>
@endsection