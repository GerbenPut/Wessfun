{!! Form::open(['url' => 'merch/'.$merch->id , 'method' => 'PATCH']) !!}
{!! Form::token() !!}

<div class="form-group">
    {!! Form::label('name', 'Name'); !!}
    {!! Form::text('name', $merch->name ,array('class' => 'form-control'))!!}
</div>

<div class="form-group">
    {!! Form::label('price', 'Price'); !!}
    {!! Form::textarea('price', $merch->price ,array('class' => 'form-control', 'rows' => '3'))!!}
</div>

<div class="form-group">
    {!! Form::label('sort', 'Sort'); !!}
    {!! Form::select('sort', array('Small' => 'S', 'Medium' => 'M', 'Large' => 'L'), 'S');!!}
</div>

<div class="form-group">
    {!! Form::label('url', 'Url'); !!}
    {!! Form::text('url', $merch->url ,array('class' => 'form-control'))!!}
</div>

<div class="form-group">
    {!! Form::submit('Submit', array('class' => 'btn btn-default')); !!}
    {!! Form::close() !!}
</div>

<a href="https://wessfun.recoded.nl/merch">Back to merch</a>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
