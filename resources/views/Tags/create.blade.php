@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div style="margin-top: 100px" class="card">
                    <div class="card-header">Tags</div>
                    <div class="card-body">
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

                            <form action="http://127.0.0.1:8000/tags">
                                <input class="backbutton" type="submit" value="Back"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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

@endsection
