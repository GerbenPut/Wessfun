@forelse($comments as $comment)
    {{--<hr>--}}

    {{--<div class="panel-body">--}}
        {{--<h3>--}}
            {{--<b>--}}
                {{--<a href="{{ route('comment.show', $comment) }}">--}}
                    {{--{{ $comment->title }}--}}
                {{--</a>--}}
            {{--</b>--}}
        {{--</h3>--}}
        {{--<p>{{ $comment->message }}</p>--}}
    {{--</div>--}}

        <th scope="row">{{$comment->id}}</th>
        <td>{{ $comment->title }}</td>
        <td>{{$comment->message}}</td>
        <td><a href="{{URL::to('comment/'.$comment->id.'/edit')}}"><button class="btn btn-primary" type="submit">Edit</button></a></td>
        <td>{{ Form::open(array('url' => 'comment/'.$comment->id, 'class' => 'pull-right')) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
            {{ Form::close() }}
        </td>
<br>
@empty
    <span>No results</span>
@endforelse