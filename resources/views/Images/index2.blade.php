<head>
    <link href="{{asset('scss/style.scss')}}" rel="stylesheet">
</head>

@foreach ($images->reverse()  as $image)
    @if($image->category_id=='3')

    @else
        <div class="articlemargin">
            <article class="main-article">
                <header class="main-images-header">
                    {{--Hier komt de titel en description van de media--}}

                    <a class="imagelink" href="http://127.0.0.1:8000/images/{{$image->id}}">
                        <td>{{$image->title}}</td>
                    </a>
                </header>

                <div class="main-image">
                    {{--Hier komt de Gif/Image/video--}}
                    {{--<img src="{{$image->url}}" style="height: 50%; width: auto">--}}

                    @if($image->sort=='Video')
                        <video class="postimage" controls>
                            <source src="{{$image->url}}" type="video/mp4">
                            <source src="{{$image->url}}" type="video/ogg">
                        </video>
                    @else
                        <a class="imagelink" href="http://127.0.0.1:8000/images/{{$image->id}}"> <img class="postimage" src="{{$image->url}}">
                        </a>
                    @endif

                </div>

                <footer class="main-images-footer">
                    {{--Hier komt het voten per media--}}
                </footer>
            </article>
            @role('Admin', 'web')
            <td><a href="{{URL::to('images/'.$image->id.'/edit')}}">
                    <button class="editbtn" type="submit">Edit</button>
                </a></td>
            <td>{{ Form::open(array('url' => 'images/'.$image->id)) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', array('class' => 'deletebtn')) }}
                {{ Form::close() }}
            </td>
            @endrole
        </div>
    @endif
@endforeach