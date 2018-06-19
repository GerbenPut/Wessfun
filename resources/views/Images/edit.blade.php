<head>
    <link href="{{asset('scss/style.scss')}}" rel="stylesheet">
</head>

@extends('layouts.app')
@section('content')
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit this post</div>
                    <div class="card-body">
                        <div class="advertisementsindex">
                            <div class="advertisementsindex">
                                <div class="createform">
                                    {!! Form::open(['url' => 'images/'.$image->id , 'method' => 'PATCH']) !!}
                                    {!! Form::token() !!}

                                    <div class="form-group">
                                        {!! Form::label('title', 'Title'); !!}
                                        {!! Form::text('title', $image->title ,array('class' => 'form-control'))!!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('description', 'Description'); !!}
                                        {!! Form::textarea('description', $image->description ,array('class' => 'form-control', 'rows' => '3'))!!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('sort', 'Sort'); !!}
                                        {!! Form::select('sort', array('Video' => 'Video (must be embed)', 'Photo' => 'Photo'), 'S');!!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('category_id', 'Category') !!}
                                        {!! Form::select('category_id', $categories);!!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('url', 'Url'); !!}
                                        {!! Form::text('url', $image->url ,array('class' => 'form-control'))!!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::submit('Submit', array('class' => 'backbutton')); !!}
                                        {!! Form::close() !!}
                                    </div>

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <form action="http://127.0.0.1:8000">
                                        <input class="backbutton" type="submit" value="Back"/>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



