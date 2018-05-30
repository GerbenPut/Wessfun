@extends('welcome')
<title>Laravel-joris</title>
@section('links')
<a href="http://127.0.0.1:8000/images/create">Add image</a>
<a href="http://127.0.0.1:8000/images/list">Image lijst</a>
@endsection
<div id="test">
    @yield('content')
</div>

<div class="imagesindex">
    <table class="table">
        <thead class="thead-dark">
        <tr>

            <th scope="col">Nr</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Category</th>
            <th scope="col">Url</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($images as $image)
            <tr>

                <th scope="row">{{$image->id}}</th>
                <td>{{$image->title}}</td>
                <td>{{$image->description}}</td>
                <td>{{$image->category}}</td>
                {{--<td><a href={{$image->url}}</a></td>--}}
                <td><img src="{{$image->url}}" style="height: 50%; width: auto"></td>
                <td><a href="{{URL::to('images/'.$image->id.'/edit')}}">
                        <button class="btn btn-primary" type="submit">Edit</button>
                    </a></td>
                <td>{{ Form::open(array('url' => 'images/'.$image->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                    {{ Form::close() }}
                </td>
            </tr>


        @endforeach
        </tbody>
    </table>
</div>
</div>