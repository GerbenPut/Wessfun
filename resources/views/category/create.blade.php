@extends('layouts.master')

@section('content')

    {!! Form::open(['url' => 'categories', 'method' => 'POST']) !!}
    {!! Form::token() !!}

    <div class="form-group">
        {!! Form::label('category', 'category'); !!}
        {!! Form::text('category', '',['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'description'); !!}
        {!! Form::textarea('description', '',['class' => 'form-control', 'rows' => '3']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Submit', ['class' => 'btn btn-default']); !!}
        {!! Form::close() !!}
    </div>

    <form action="http://127.0.0.1:8000/categories">
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

@endsection