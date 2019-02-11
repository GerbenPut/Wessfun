@extends('CommentLayouts.master')

@section('content')

    {!! Form::open(array('url' => 'comment/'.$comment->id, 'method' => 'PATCH')) !!}
    {!! Form::token() !!}



    <div class="form-group">
        {!! Form::textarea('content', $comment->message, array('class' => 'form-control', 'rows'=> '5')); !!}

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
    <a href="https://wessfun.recoded.nl/comment">Back to comments</a>
@endsection
