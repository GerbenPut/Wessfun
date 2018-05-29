@extends('layouts.master')

@section('content')
    <input type="button" value="Refresh Page" onClick="window.location.reload()">
    <table class="table">
        <thead class="thead-dark">
        <tr>

            <th scope="col">Nr</th>
            <th scope="col">category</th>
            <th scope="col">description</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($categories as $category)
            <tr>

                <th scope="row">{{$category->id}}</th>
                <td><a href="categories/{{$category->id}}"> {{$category->category}}</a></td>
                <td>{{$category->description}}</td>
                <td><a href="{{URL::to('categories/'.$category->id.'/edit')}}"><button class="btn btn-primary" type="submit">Edit</button></a></td>
                <td>{{ Form::open(array('url' => 'categories/'.$category->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                    {{ Form::close() }}
                </td>
            </tr>


        @endforeach
        </tbody>
    </table>

@endsection