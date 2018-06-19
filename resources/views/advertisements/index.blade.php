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
                    <div class="card-header">advertisements</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="advertisementsindex">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Nr</th>
                                    <th scope="col">Company</th>
                                    <th scope="col">Url</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($advertisements as $advertisement)
                                    <tr>
                                        <th scope="row">{{$advertisement->id}}</th>
                                        <td>
                                            <a href="advertisements/{{$advertisement->id}}"> {{$advertisement->Company}}</a>
                                        </td>
                                        <td style="max-width: 300px">{{$advertisement->URL}}</td>
                                        <td><a href="{{URL::to('advertisements/'.$advertisement->id.'/edit')}}">
                                                <button class="backbutton" type="submit">Edit</button>
                                            </a></td>
                                        <td>{{ Form::open(array('url' => 'advertisements/'.$advertisement->id, 'class' => 'pull-right')) }}
                                            {{ Form::hidden('_method', 'DELETE') }}
                                            {{ Form::submit('Delete', array('class' => 'backbutton')) }}
                                            {{ Form::close() }}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


