@extends('CommentLayouts.master')

@section('content')

    {!! Form::open(array('url' => 'comment/', 'method' => 'POST')) !!}
    {!! Form::token() !!}

    <div class="form-group">
        {!! Form::label('title', 'Title'); !!}
        {!! Form::text('title', '', array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::textarea('message', '', array('class' => 'form-control', 'rows'=> '5')); !!}

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

@endsection

