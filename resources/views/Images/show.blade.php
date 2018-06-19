<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Wessfun</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="//fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
</head>
<body>
{{--top-header start--}}
<header class="top-header">
    @include('Layouts.app')
    <form action="http://127.0.0.1:8000/create">
        <input class="createbutton" type="submit" value="Create Post"/>
    </form>
</header>
{{--top header ends--}}
{{--main-div starts--}}
<div class="main-div">
    <section class="main-left-comment">
        {{--Hier komen de categories--}}
        {{--Dit deel moet meebewegen als je scrolled--}}
        <header class="main-left-category-header">
            <p>Comments</p>
        </header>


        <div class="createcomment">
            @role('Admin|RegisteredUser', 'web')
            {!! Form::open(array('url' => 'comment/', 'method' => 'POST')) !!}
            {!! Form::token() !!}

            <div class="form-group">
                {!! Form::label('title', 'Title'); !!}
                {!! Form::text('title', '', array('class' => 'form-control')) !!}
            </div>

            <div class="form-group">
                {!! Form::label('message', 'Message'); !!}
                {!! Form::textarea('message', '', array('class' => 'form-control', 'rows'=> '5')); !!}
            </div>

            <div class="form-group">
                {!! Form::hidden('image_id', $image->id) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Submit', array('class' => 'btn btn-default')); !!}
                {!! Form::close() !!}
            </div>
            @endrole
        </div>
        <div class="comment">
            @foreach ($image->comments->reverse() as $comment)
                <hr>
                <h2>{{$comment->user->name}}:</h2>
                <p>{{$comment->message}}</p>
                <br>
            @endforeach
        </div>
    </section>
    <main role="main">
        <div class="main-tags">
            {{--Hier komt de lijst met tags--}}
            {{--@include('layouts.tags')--}}
        </div>
        <section class="main-images">
            <div>
                <div class="articlemargin">
                    <article class="main-article">
                        <header class="main-images-header">
                            {{--Hier komt de titel en description van de media--}}

                            <a class="imagelink" href="http://127.0.0.1:8000/images/{{$image->id}}">
                                <td>{{$image->title}}: {{$image->description}}</td>
                            </a>
                        </header>

                        <div class="main-image">
                            <div class="blog-post">
                                @if($image->sort=='Video')
                                    <video class="postimage" controls>
                                        <source src="{{$image->url}}" type="video/mp4">
                                        <source src="{{$image->url}}" type="video/ogg">
                                    </video>
                                @else
                                    <img class="postimage" src="{{$image->url}}">
                                @endif
                            </div>

                        </div>

                        <footer class="main-images-footer">
                            {{--Hier komt het voten per media--}}
                        </footer>
                    </article>
                    @role('Admin', 'web')
                    <td><a href="{{URL::to('images/'.$image->id.'/edit')}}">
                            <button class="editbtn" type="submit">Edit</button>
                        </a></td>
                    <td>{{ Form::open(array('url' => 'images/'.$image->id)) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete', array('class' => 'deletebtn')) }}
                        {{ Form::close() }}
                    </td>
                    @endrole
                </div>
            </div>
            {{--@yield('image')--}}
        </section>
        <form action="http://127.0.0.1:8000">
            <input style="width: 50%; margin-left: 25%;" class="backbutton" type="submit" value="Back to homepage"/>
        </form>
    </main>
    <section class="main-right">
        {{--Hier komt reclame???--}}
    </section>
</div>
{{--main-div ends--}}
<footer class="bottomfooter">
    {{--Hier komt ??--}}
    {{--Dit deel moet meebewegen als je scrolled--}}
</footer>

</body>
@yield('scripts')
</html>


