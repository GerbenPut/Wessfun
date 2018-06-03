@extends('layouts.master2')
{{--@include('../ImagesController.php')--}}
@section('image')
    {{--{{ $images = image::all();--}}

    <article class="main-article">
        <header class="main-images-header">
            {{--Hier komt de titel en description van de media--}}
        </header>
        <div class="main-image">
            {{--Hier komt de Gif/Image/video--}}
            @foreach ($images as $image)
            <img src="{{$image->url}}" style="height: 50%; width: auto">
            @endforeach
            <p>TEST</p>
        </div>
        <footer class="main-images-footer">
            {{--Hier komt het voten per media--}}
        </footer>
    </article>
@endsection