<head>
    <link href="{{asset('scss/style.scss')}}" rel="stylesheet">
</head>

<head>
    <link href="{{asset('scss/style.scss')}}" rel="stylesheet">
</head>
@foreach ($images as $image)
    <article class="main-article">
        <header class="main-images-header">
            {{--Hier komt de titel en description van de media--}}
            <td>{{$image->title}}</td>
        </header>

        <div class="main-image">
            {{--Hier komt de Gif/Image/video--}}
            {{--<img src="{{$image->url}}" style="height: 50%; width: auto">--}}

            @if($image->sort=='Video')
                <video width="320" height="240" controls>
                    <source src="{{$image->url}}" type="video/mp4">
                    <source src="{{$image->url}}" type="video/ogg">
                </video>
            @else
                <a href="http://127.0.0.1:8000/images/{{$image->id}}"> <img src="{{$image->url}}"
                                                                            style="height: 420px; width: 420px;"> </a>
                <hr>
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
        </div>

        <footer class="main-images-footer">
            {{--Hier komt het voten per media--}}
        </footer>
    </article>
@endforeach