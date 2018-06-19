@foreach ($advertisements as $advertisement)
    <tr>
        <th scope="row">{{$advertisement->id}}</th>
        <td>
            <a href="advertisements/{{$advertisement->id}}"> {{$advertisement->Company}}</a>
        </td>
        <td style="max-width: 300px">{{$advertisement->URL}}</td>
        <td><a href="{{URL::to('advertisements/'.$advertisement->id.'/edit')}}">
                <button class="backbutton" type="submit">Edit</button>
            </a></td>
        <td>{{ Form::open(array('url' => 'advertisements/'.$advertisement->id, 'class' => 'pull-right')) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', array('class' => 'backbutton')) }}
            {{ Form::close() }}
        </td>
    </tr>
@endforeach