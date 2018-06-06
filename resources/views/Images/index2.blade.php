@extends('Layouts.app')

@section('content')

<article class="main-article">
    <header class="main-images-header">
        {{--Hier komt de titel en description van de media--}}
    </header>

    <div class="main-image">
        {{--Hier komt de Gif/Image/video--}}
        <div class="createpostbutton">
            @role('User', 'web')
            You must be registered to create a post
            @endrole
            <br>
            @role('RegisteredUser', 'web')
            {{--<form action="{{ url('/create') }}">--}}
            <form action="http://127.0.0.1:8000/create">
                <input type="submit" value="Create a post"/>
            </form>
            @else
                @role('Admin', 'web')
                {{--<form action="{{ url('/create') }}">--}}
                    <form action="http://127.0.0.1:8000/create">
                    <input type="submit" value="Create a post"/>
                </form>
            @else
                    You must be an registered user to create a post
                @endrole
            @endrole
            <br>
        </div>
        @foreach ($images as $image)
            {{--<img src="{{$image->url}}" style="height: 50%; width: auto">--}}
            <td>{{$image->title}}</td>
            <td>{{$image->description}}</td>
            <td>{{$image->category}}</td>
            <td>{{$image->sort}}</td>
            @if($image->sort=='Video')
                <video width="320" height="240" controls>
                    <source src="{{$image->url}}" type="video/mp4">
                    <source src="{{$image->url}}" type="video/ogg">
                </video>
            @else
                <img src="{{$image->url}}" style="height: 420px; width: 315px;">
            @endif

            @role('Admin', 'web')
            <td><a href="{{URL::to('images/'.$image->id.'/edit')}}">
                    <button type="submit">Edit</button>
                </a></td>
            <td>{{ Form::open(array('url' => 'images/'.$image->id)) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete') }}
                {{ Form::close() }}
            </td>
            @endrole
        @endforeach


    </div>
    <footer class="main-images-footer">
        {{--Hier komt het voten per media--}}
    </footer>
</article>
@endsection