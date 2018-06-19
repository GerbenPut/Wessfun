<div class="blog-post">
        <h2 class="blog-post-title">{{$image->title}}</h2>
        <p>{{$image->description}}</p>
        <img src="{{$image->url}}" style="height: 50%; width: auto">
</div>
<a href="http://127.0.0.1:8000/">Back to home</a>
<h1>Comments</h1>
    @role('Admin|RegisteredUser', 'web')
        {!! Form::open(array('url' => 'comment/', 'method' => 'POST')) !!}
        {!! Form::token() !!}


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
@foreach ($image->comments as $comment)
    <h2>{{$comment->user->name}}</h2>
    <p>{{$comment->message}}</p>
@endforeach

