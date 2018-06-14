{!! Form::open(['url' => 'merch', 'method' => 'POST']) !!}
{!! Form::token() !!}

<div class="form-group">
    {!! Form::label('name', 'Name'); !!}
    {!! Form::text('name', '',array('class' => 'form-control'))!!}
</div>

<div class="form-group">
    {!! Form::label('price', 'Price'); !!}
    {!! Form::textarea('price', '',array('class' => 'form-control', 'rows' => '2'))!!}
</div>

<div class="form-group">
    {!! Form::label('size', 'Size'); !!}
    {!! Form::select('size', array('Small' => 'S', 'Medium' => 'M', 'Large' => 'L'), 'S');!!}
</div>

<div class="form-group">
    {!! Form::label('url', 'Image-url'); !!}
    {!! Form::text('url', '',array('class' => 'form-control'))!!}
</div>

<div class="form-group">
    {!! Form::submit('Submit', array('class' => 'btn btn-default')); !!}
    {!! Form::close() !!}
</div>

<a href="http://127.0.0.1:8000/merch">Back to merch</a>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif