@extends('Layouts.master')

@section('content')

    {!! Form::open(array('url' => 'tags/'.$tag->id, 'method' => 'PATCH')) !!}
    {!! Form::token() !!}

    <div class="form-group">
        {!! Form::label('title', 'Title'); !!}
        {!! Form::text('title', $tag->title, array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::textarea('message', $tag->message, array('class' => 'form-control', 'rows'=> '5')); !!}

    </div>

    <div class="form-group">
        {!! Form::submit('Submit', array('class' => 'btn btn-default')); !!}
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
    <a href="http://127.0.0.1:8000/tags">Back to tags</a>
@endsection