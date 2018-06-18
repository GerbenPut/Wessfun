@extends('layouts.master')

@section('content')

    <div class="createform">
        {!! Form::open(['url' => 'advertisements', 'method' => 'POST']) !!}
        {!! Form::token() !!}

        <div class="form-group">
            {!! Form::label('Company', 'company'); !!}
            {!! Form::text('Company', '',['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('URL', 'url'); !!}
            {!! Form::textarea('URL', '',['class' => 'form-control', 'rows' => '3']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Submit', ['class' => 'backbutton']); !!}
            {!! Form::close() !!}
        </div>

        <form action="http://127.0.0.1:8000/admin">
            <input class="backbutton" type="submit" value="Back"/>
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

@endsection
