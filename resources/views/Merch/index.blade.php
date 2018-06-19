<link href="{{asset('css/app.css')}}" rel="stylesheet">
        <a href="http://127.0.0.1:8000">Home</a>
<link href="{{asset('scss/style.scss')}}" rel="stylesheet">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Size</th>
                <th scope="col">Url</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                <th> <a href="http://127.0.0.1:8000/merch/create">Add Merch</a> </th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($merches as $merch)
                <tr>
                    <th scope="row">{{$merch->id}}</th>
                    <td>{{ $merch->name }}</td>
                    <td>{{$merch->price}}</td>
                    <td>{{$merch->size}}</td>
               <td> <img class="postimage" src="{{$merch->url}}" > </td>
                    <td><a href="{{URL::to('merch/'.$merch->id.'/edit')}}"><button class="btn btn-primary" type="submit">Edit</button></a></td>
                    <td>{{ Form::open(array('url' => 'merch/'.$merch->id, 'class' => 'pull-right')) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
