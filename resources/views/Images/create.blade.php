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
                    <div class="card-header">Create a post</div>
                    <div class="card-body">
                        <div class="advertisementsindex">
                            <div class="advertisementsindex">
                                <div class="createform">
                                    {!! Form::open(['url' => 'images', 'method' => 'POST']) !!}
                                    {!! Form::token() !!}

                                    <div class="form-group">
                                        {!! Form::label('title', 'Title'); !!}
                                        {!! Form::text('title', '',array('class' => 'form-control'))!!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('description', 'Description'); !!}
                                        {!! Form::textarea('description', '',array('class' => 'form-control', 'rows' => '2'))!!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('sort', 'Sort'); !!}
                                        {!! Form::select('sort', array( 'Photo' => 'Photo', 'Video' => 'Video (must be embed)'), 'S');!!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('url', 'Image-url'); !!}
                                        {!! Form::url('url', '',array('class' => 'form-control'))!!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('category_id', 'Category') !!}
                                        {!! Form::select('category_id', $categories);!!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::submit('Submit', array('class' => 'backbutton')); !!}
                                        {!! Form::close() !!}
                                    </div>

                                    <form action="https://wessfun.recoded.nl">
                                        <input class="backbutton" type="submit" value="Back"/>
                                    </form>

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
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
        </div>
    </div>
@endsection
