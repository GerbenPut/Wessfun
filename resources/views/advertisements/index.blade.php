@extends('layouts.app')

@section('content')
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
                                    <th scope="col">advertisement</th>
                                    <th scope="col">description</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($advertisements as $advertisement)
                                    <tr>

                                        <th scope="row">{{$advertisement->id}}</th>
                                        <td><a href="advertisements/{{$advertisement->id}}"> {{$advertisement->advertisement}}</a></td>
                                        <td>{{$advertisement->description}}</td>
                                        <td><a href="{{URL::to('advertisements/'.$advertisement->id.'/edit')}}">
                                                <button class="btn btn-primary" type="submit">Edit</button>
                                            </a></td>
                                        <td>{{ Form::open(array('url' => 'advertisements/'.$advertisement->id, 'class' => 'pull-right')) }}
                                            {{ Form::hidden('_method', 'DELETE') }}
                                            {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
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
                                {!! Form::label('advertisement', 'advertisement'); !!}
                                {!! Form::text('advertisement', '',['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('description', 'description'); !!}
                                {!! Form::textarea('description', '',['class' => 'form-control', 'rows' => '3']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::submit('Submit', ['class' => 'btn btn-default']); !!}
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
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

