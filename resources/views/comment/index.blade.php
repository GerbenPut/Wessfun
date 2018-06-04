@extends('CommentLayouts.master')

@section('content')
    <!--@foreach($comments as $comment)

        <div class="comment-post">
            <h2 class="comment-post-title">{{ $comment->titel }}</h2>
            <p class="comment-post-meta">December 23,2013</p>

            <p> {{$comment->content}}</p>

        </div>

        @endforeach-->
        <a href="http://127.0.0.1:8000">Home</a>
        <table class="table">

            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Titel</th>
                <th scope="col">Message</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                <th> <a href="http://127.0.0.1:8000/comment/create">Comment create</a> </th>
                <th scope="col"></th>

            </tr>
            </thead>
            <tbody>

            @foreach($comments as $comment)

                <tr>
                    <th scope="row">{{$comment->id}}</th>
                    <td>{{ $comment->title }}</td>
                    <td>{{$comment->message}}</td>
                    <td><a href="{{URL::to('comment/'.$comment->id.'/edit')}}"><button class="btn btn-primary" type="submit">Edit</button></a></td>
                    <td>{{ Form::open(array('url' => 'comment/'.$comment->id, 'class' => 'pull-right')) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                        {{ Form::close() }}
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>

        <form action="/search" method="POST" role="search">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" class="form-control" name="q"
                       placeholder="Search users"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
            </div>
        </form>

@endsection
