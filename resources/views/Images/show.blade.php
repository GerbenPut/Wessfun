
    {{--<div class="blog-post">--}}
        {{--<h2 class="blog-post-title">{{$image->title}}</h2>--}}
        {{--<p>{{$image->description}}</p>--}}
        {{--<img src="{{$image->url}}" style="height: 50%; width: auto">--}}
    {{--</div>--}}
    {{--<a href="http://127.0.0.1:8000/">Back to home</a>--}}

@foreach ($images as $image)
    @foreach ($image->categories as $category)
        <p>{{$category->category}}</p>
    @endforeach
@endforeach