@forelse($tags as $tag)
    <th scope="row">{{$tag->id}}</th>
    <td>{{ $tag->title }}</td>
    <td>{{$tag->message}}</td>
    <td><a href="{{URL::to('tags/'.$tag->id.'/edit')}}"><button class="btn btn-primary" type="submit">Edit</button></a></td>
    <td>{{ Form::open(array('url' => 'tags/'.$tag->id, 'class' => 'pull-right')) }}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
        {{ Form::close() }}
    </td>
    <br>
@empty
    <span>No results</span>
@endforelse