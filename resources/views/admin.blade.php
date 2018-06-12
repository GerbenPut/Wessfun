@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Categories</div>

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

                                    <th scope="col">Nr</th>
                                    <th scope="col">category</th>
                                    <th scope="col">description</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($categories as $category)
                                    <tr>

                                        <th scope="row">{{$category->id}}</th>
                                        <td><a href="categories/{{$category->id}}"> {{$category->category}}</a></td>
                                        <td>{{$category->description}}</td>
                                        <td><a href="{{URL::to('categories/'.$category->id.'/edit')}}">
                                                <button class="btn btn-primary" type="submit">Edit</button>
                                            </a></td>
                                        <td>{{ Form::open(array('url' => 'categories/'.$category->id, 'class' => 'pull-right')) }}
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
                            {!! Form::open(['url' => 'categories/'.$category->id , 'method' => 'PATCH']) !!}
                            {!! Form::token() !!}

                            <div class="form-group">
                                {!! Form::label('category', 'category'); !!}
                                {!! Form::text('category', $category->category ,array('class' => 'form-control'))!!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('description', 'description'); !!}
                                {!! Form::textarea('description', $category->description,array('class' => 'form-control', 'rows' => '3'))!!}
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
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

