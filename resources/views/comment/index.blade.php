<head>
    <link href="{{asset('scss/style.scss')}}" rel="stylesheet">
</head>

@extends('layouts.app')
@section('content')
    <body id="top-image">
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Comments</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="categoriesindex">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Message</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($comments as $comment)
                <tr>
                    <th scope="row">{{$comment->id}}</th>
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
                        </div>
                            <div class="createform">
                                {!! Form::open(['url' => 'categories', 'method' => 'POST']) !!}
                                {!! Form::token() !!}

                                <div class="form-group">
                                    {!! Form::label('Category', 'Category'); !!}
                                    {!! Form::text('category', '',['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('description', 'description'); !!}
                                    {!! Form::textarea('description', '',['class' => 'form-control', 'rows' => '3']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::submit('Submit', ['class' => 'backbutton']); !!}
                                    {!! Form::close() !!}
                                </div>

                                <form action="http://127.0.0.1:8000/admin">
                                    <input class="backbutton" type="submit" value="Back" />
                                </form>

                                @if ($errors->any())
                                    <div>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection
