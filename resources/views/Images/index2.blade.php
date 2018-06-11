{{--@extends('layouts.master2')--}}

{{--@section('image')--}}

<article class="main-article">
        <header class="main-images-header">
            {{--Hier komt de titel en description van de media--}}
        </header>
        <div class="main-image">
            {{--Hier komt de Gif/Image/video--}}
            @foreach ($images as $image)
            <img src="{{$image->url}}" style="height: 50%; width: auto">
                    {{--{{$url = DB::table('images')->from ('images')->first());--}}
                    {{--echo $url->url;}}--}}
                        {{--@foreach ($image->categories as $category)--}}
                                {{--<p>{{$category->category}}</p>--}}
                        {{--@endforeach--}}
                    <hr>
            @endforeach

        </div>
        <footer class="main-images-footer">
            {{--Hier komt het voten per media--}}

        </footer>
</article>
{{--@endsection--}}