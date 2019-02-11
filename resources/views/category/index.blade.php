<head>
    <link href="{{asset('scss/style.scss')}}" rel="stylesheet">
</head>

@extends('layouts.app')
@section('content')
    <body id="top-image">
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">categories</div>

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
                                    <th scope="col">Category</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <th scope="row">{{$category->id}}</th>
                                        <td><a href="categories/{{$category->id}}"> {{$category->category}}</a></td>
                                        <td style="max-width: 300px">{{$category->description}}</td>
                                        <td><a href="{{URL::to('categories/'.$category->id.'/edit')}}">
                                                <button class="backbutton" type="submit">Edit</button>
                                            </a></td>
                                        <td>{{ Form::open(array('url' => 'categories/'.$category->id, 'class' => 'pull-right')) }}
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
                            {!! Form::open(['url' => 'categories', 'method' => 'POST']) !!}
                            {!! Form::token() !!}

                            <div class="form-group">
                                {!! Form::label('Category', 'Category'); !!}
                                {!! Form::text('category', '',['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('description', 'description'); !!}
                                {!! Form::textarea('description', '',['class' => 'form-control', 'rows' => '3']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::submit('Submit', ['class' => 'backbutton']); !!}
                                {!! Form::close() !!}
                            </div>

                            <form action="{{ url('/admin')}}">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        var movementStrength = 25;
        var height = movementStrength / $(window).height();
        var width = movementStrength / $(window).width();
        $("#top-image").mousemove(function(e){
            var pageX = e.pageX - ($(window).width() / 2);
            var pageY = e.pageY - ($(window).height() / 2);
            var newvalueX = width * pageX * -1 - 25;
            var newvalueY = height * pageY * -1 - 50;
            $('#top-image').css("background-position", newvalueX+"px     "+newvalueY+"px");
        });
    });
</script>

