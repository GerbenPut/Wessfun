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
                    <div class="card-header">Tags</div>

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
                                    <th scope="col">Titel</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>


                                {{--<div id="results">--}}
                                {{--<span>Loading...</span>--}}
                                {{--</div>--}}
                                @foreach($tags as $tag)
                                    <tr>
                                        <th scope="row">{{$tag->id}}</th>
                                        <td>{{$tag->title }}</td>
                                        <td>{{$tag->message}}</td>
                                        <td><a href="{{URL::to('tags/'.$tag->id.'/edit')}}"><button class="backbutton" type="submit">Edit</button></a></td>
                                        <td>{{ Form::open(array('url' => 'tags/'.$tag->id, 'class' => 'pull-right')) }}
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
                                {!! Form::open(['url' => 'tags', 'method' => 'POST']) !!}
                                {!! Form::token() !!}

                                <div class="form-group">
                                    {!! Form::label('Title', 'Title'); !!}
                                    {!! Form::text('title', '',['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('Message', 'Message'); !!}
                                    {!! Form::textarea('message', '',['class' => 'form-control', 'rows' => '3']) !!}
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

                        @section('scripts')
                            <script>
                                var searchTimer = null;

                                $('body').on('submit', 'form.ajaxSearch', function (e) {
                                    var form = $(this);

                                    ajaxSearch(form);
                                    return false;
                                });

                                $('body').on('keyup', 'form.ajaxSearch input[type=search]', function() {
                                    var form = $(this).closest('form.ajaxSearch');

                                    if(form) {
                                        if(searchTimer !== null) clearInterval(searchTimer);

                                        searchTimer = setTimeout(function() {
                                            ajaxSearch(form);
                                        }, 800);
                                    }
                                });

                                $(document).ready(function() {
                                    ajaxSearch($('form.ajaxSearch'));
                                });

                                var ajaxSearch = function(form) {
                                    $.ajax({
                                        url: form.attr('action') + '/',
                                        type: form.attr('method'),
                                        method: form.attr('method'),
                                        data: {"query": form.find('input[name=query]').val(), "_token": "{{ csrf_token() }}"}
                                    }).done(function (res) {
                                        $('#results').html(res);
                                    }).fail(function (res) {
                                        alert('Failed search');
                                    });
                                }
                            </script>
@endsection
