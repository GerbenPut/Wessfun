<div class="form-group">
    {!! Form::label('title', 'Title'); !!}
    {!! Form::text('title', '',array('class' => 'form-control'))!!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description'); !!}
    {!! Form::textarea('description', '',array('class' => 'form-control', 'rows' => '2'))!!}
</div>

<div class="form-group">
    {!! Form::label('category', 'Category'); !!}
    {!! Form::select('size', array('L' => 'Large', 'S' => 'Small'), 'S');!!}
</div>

<div class="form-group">
    {!! Form::label('url', 'Image'); !!}
    {{ Form::file('image', ['class' => 'field']) }}
</div>

<div class="form-group">
        {!! Form::submit('Submit', array('class' => 'btn btn-default')); !!}
        {!! Form::close() !!}
    </div>
