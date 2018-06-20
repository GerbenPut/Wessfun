
<table class="table">
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Message</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
        <th scope="col"></th>
    </tr>
@forelse($comments as $comment)
    <tr>
        <th scope="row">{{$comment->id}}</th>
        <td>{{$comment->message}}</td>
        <td><a href="{{URL::to('comment/'.$comment->id.'/edit')}}"><button class="btn btn-primary" type="submit">Edit</button></a></td>
        <td>{{ Form::open(array('url' => 'comment/'.$comment->id, 'class' => 'pull-right')) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
            {{ Form::close() }}
        </td>
    </tr>
<br>
@empty
    <span>No results</span>
@endforelse
        </table>