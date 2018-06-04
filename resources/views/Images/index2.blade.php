<article class="main-article">
    <header class="main-images-header">
        {{--Hier komt de titel en description van de media--}}
    </header>
    <div class="main-image">
        {{--Hier komt de Gif/Image/video--}}
        @foreach ($images as $image)
            {{--<img src="{{$image->url}}" style="height: 50%; width: auto">--}}
            <td>{{$image->title}}</td>
            <td>{{$image->description}}</td>
            <td>{{$image->category}}</td>
            <td>{{$image->sort}}</td>
            @if($image->sort=='Image')
                <img src="{{$image->url}}" style="height: 420px; width: 315px;">
            @else
                <iframe width="420" height="315" src="{{$image->url}}"></iframe>
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
