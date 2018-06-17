@extends('layouts.master')
<head>
    <link href="{{asset('scss/style.scss')}}" rel="stylesheet">
</head>
@section('content')

    {!! Form::open(['url' => 'advertisements/'.$advertisement->id , 'method' => 'PATCH']) !!}
    {!! Form::token() !!}

    <div class="form-group">
        {!! Form::label('Company', 'Company'); !!}
        {!! Form::text('Company', $advertisement->Company ,array('class' => 'form-control'))!!}
    </div>

    <div class="form-group">
        {!! Form::label('URL', 'URL'); !!}
        {!! Form::textarea('URL', $advertisement->URL,array('class' => 'form-control', 'rows' => '3'))!!}
    </div>

    <div class="form-group">
        {!! Form::submit('Submit', array('class' => 'backbutton')); !!}
        {!! Form::close() !!}
    </div>

    <form action="http://127.0.0.1:8000/advertisements">
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