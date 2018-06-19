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
                                    {!! Form::open(['url' => 'categories/'.$category->id , 'method' => 'PATCH']) !!}
                                    {!! Form::token() !!}

                                    <div class="form-group">
                                        {!! Form::label('category', 'category'); !!}
                                        {!! Form::text('category', $category->category ,array('class' => 'form-control'))!!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('description', 'description'); !!}
                                        {!! Form::textarea('description', $category->description,array('class' => 'form-control', 'rows' => '3'))!!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::submit('Submit', array('class' => 'backbutton')); !!}
                                        {!! Form::close() !!}
                                    </div>

                                    @if ($errors->any())
                                        <div>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <form action="http://127.0.0.1:8000/categories">
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



