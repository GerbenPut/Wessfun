@extends('PostsLayouts.master')

@section('content')

    {!! Form::open(['url' => 'posts/'.$post->id , 'method' => 'PATCH']) !!}
    {!! Form::token() !!}

    <div class="form-group">
        {!! Form::label('title', 'Title'); !!}
        {!! Form::text('title', $post->title ,array('class' => 'form-control'))!!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Description'); !!}
        {!! Form::textarea('description', $post->description ,array('class' => 'form-control', 'rows' => '3'))!!}
    </div>

    <div class="form-group">
        {!! Form::label('category', 'Category'); !!}
        {!! Form::textarea('category', $post->category ,array('class' => 'form-control', 'rows' => '3'))!!}
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

