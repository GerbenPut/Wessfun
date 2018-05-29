@extends('PostsLayouts.master')

@section('content')
    <table class="table">
        <thead class="thead-dark">
        <tr>

            <th scope="col">Nr</th>
            <th scope="col">Titel</th>
            <th scope="col">Content</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
            <tr>

                <th scope="row">{{$post->id}}</th>
                <td><a href="posts/{{$post->id}}"> {{$post->title}}</a></td>
                <td>{{$post->content}}</td>
                <td><a href="{{URL::to('posts/'.$post->id.'/edit')}}"><button class="btn btn-primary" type="submit">Edit</button></a></td>
                <td>{{ Form::open(array('url' => 'posts/'.$post->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                    {{ Form::close() }}
                </td>
            </tr>


        @endforeach
        </tbody>
    </table>

@endsection