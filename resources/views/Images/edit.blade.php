{!! Form::open(['url' => 'images/'.$image->id , 'method' => 'PATCH']) !!}
{!! Form::token() !!}

<div class="form-group">
    {!! Form::label('title', 'Title'); !!}
    {!! Form::text('title', $image->title ,array('class' => 'form-control'))!!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description'); !!}
    {!! Form::textarea('description', $image->description ,array('class' => 'form-control', 'rows' => '3'))!!}
</div>

<div class="form-group">
    {!! Form::label('sort', 'Sort'); !!}
    {!! Form::select('sort', array('Video' => 'Video (must be embed)', 'Photo' => 'Photo'), 'S');!!}
</div>

<div class="form-group">
    {!! Form::label('url', 'Url'); !!}
    {!! Form::text('url', $image->url ,array('class' => 'form-control'))!!}
</div>

<div class="form-group">
    {!! Form::submit('Submit', array('class' => 'btn btn-default')); !!}
    {!! Form::close() !!}
</div>

<a href="http://127.0.0.1:8000">Back to home</a>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif