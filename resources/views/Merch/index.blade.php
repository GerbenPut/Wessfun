<head>
    <link href="{{asset('scss/style.scss')}}" rel="stylesheet">
</head>

@extends('layouts.app')
@section('content')
    <br><br>
    <div class="container">
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Merch</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="categoriesindex">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Size</th>
                                <th scope="col">Url</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($merches as $merch)
                                <tr>
                                    <th scope="row">{{$merch->id}}</th>
                                    <td>{{ $merch->name }}</td>
                                    <td>{{$merch->price}}</td>
                                    <td>{{$merch->size}}</td>
                                    <td><img class="postimage" src="{{$merch->url}}"></td>
                                    <td><a href="{{URL::to('merch/'.$merch->id.'/edit')}}">
                                            <button class="backbutton" type="submit">Edit</button>
                                        </a></td>
                                    <td>{{ Form::open(array('url' => 'merch/'.$merch->id, 'class' => 'pull-right')) }}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::submit('Delete', array('class' => 'backbutton')) }}
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

