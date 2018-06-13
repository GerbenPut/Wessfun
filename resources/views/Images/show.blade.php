<div class="blog-post">
        <h2 class="blog-post-title">{{$image->title}}</h2>
        <p>{{$image->description}}</p>
        <img src="{{$image->url}}" style="height: 50%; width: auto">
</div>
<a href="http://127.0.0.1:8000/">Back to home</a>
<a href="http://127.0.0.1:8000/comment/create">Create</a>
<h1>Comments</h1>

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
    {!! Form::submit('Submit', array('class' => 'btn btn-default')); !!}
    {!! Form::close() !!}
</div>
@foreach ($image->comments as $comment)
    <h2>{{$comment->title}}</h2>
    <p>{{$comment->message}}</p>
@endforeach

