{{--@extends('Layouts.master')--}}
{{--@section('content')--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}

        {{--<a href="http://127.0.0.1:8000">Home</a>--}}
        {{--<table class="table">--}}
            {{--<thead>--}}
            {{--<tr>--}}
                {{--<th scope="col">Id</th>--}}
                {{--<th scope="col">Titel</th>--}}
                {{--<th scope="col">Message</th>--}}
                {{--<th scope="col">Edit</th>--}}
                {{--<th scope="col">Delete</th>--}}
                {{--<th> <a href="http://127.0.0.1:8000/tags/create">tag create</a> </th>--}}
                {{--<th scope="col"></th>--}}
            {{--</tr>--}}
            {{--</thead>--}}
            {{--<tbody>--}}
            {{--@foreach($tags as $tag)--}}
                {{--<tr>--}}
                    {{--<th scope="row">{{$tag->id}}</th>--}}
                    {{--<td>{{ $tag->title }}</td>--}}
                    {{--<td>{{$tag->message}}</td>--}}
                    {{--<td><a href="{{URL::to('tags/'.$tag->id.'/edit')}}"><button class="btn btn-primary" type="submit">Edit</button></a></td>--}}
                    {{--<td>{{ Form::open(array('url' => 'tags/'.$tag->id, 'class' => 'pull-right')) }}--}}
                        {{--{{ Form::hidden('_method', 'DELETE') }}--}}
                        {{--{{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}--}}
                        {{--{{ Form::close() }}--}}
                    {{--</td>--}}
                {{--</tr>--}}
            {{--@endforeach--}}
            {{--</tbody>--}}
        {{--</table>--}}
{{--@endsection--}}

{{--@section('scripts')--}}
    {{--<script>--}}
        {{--var searchTimer = null;--}}

        {{--$('body').on('submit', 'form.ajaxSearch', function (e) {--}}
            {{--var form = $(this);--}}

            {{--ajaxSearch(form);--}}
            {{--return false;--}}
        {{--});--}}

        {{--$('body').on('keyup', 'form.ajaxSearch input[type=search]', function() {--}}
            {{--var form = $(this).closest('form.ajaxSearch');--}}

            {{--if(form) {--}}
                {{--if(searchTimer !== null) clearInterval(searchTimer);--}}

                {{--searchTimer = setTimeout(function() {--}}
                    {{--ajaxSearch(form);--}}
                {{--}, 800);--}}
            {{--}--}}
        {{--});--}}

        {{--$(document).ready(function() {--}}
            {{--ajaxSearch($('form.ajaxSearch'));--}}
        {{--});--}}

        {{--var ajaxSearch = function(form) {--}}
            {{--$.ajax({--}}
                {{--url: form.attr('action') + '/',--}}
                {{--type: form.attr('method'),--}}
                {{--method: form.attr('method'),--}}
                {{--data: {"query": form.find('input[name=query]').val(), "_token": "{{ csrf_token() }}"}--}}
            {{--}).done(function (res) {--}}
                {{--$('#results').html(res);--}}
            {{--}).fail(function (res) {--}}
                {{--alert('Failed search');--}}
            {{--});--}}
        {{--}--}}
    {{--</script>--}}
{{--@endsection--}}
@extends('Layouts.master')
@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <div class="card-body">

        <form action="{{ route('tags.index') }}" method="POST" class="ajaxSearch">
            <input type="search" name="query" placeholder="Type something to search" autocomplete="off">
            <input type="submit" value="Search">
        </form>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Titel</th>
                <th scope="col">Message</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                <th> <a href="http://127.0.0.1:8000/tags/create">tag create</a> </th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>

            {{--<div id="results">--}}
            {{--<span>Loading...</span>--}}
            {{--</div>--}}
            <tr id="results">

            </tr>
            </tbody>

        </table>

    </div>
@endsection

@section('scripts')
    <script>
        var searchTimer = null;

        $('body').on('submit', 'form.ajaxSearch', function (e) {
            var form = $(this);

            ajaxSearch(form);
            return false;
        });

        $('body').on('keyup', 'form.ajaxSearch input[type=search]', function() {
            var form = $(this).closest('form.ajaxSearch');

            if(form) {
                if(searchTimer !== null) clearInterval(searchTimer);

                searchTimer = setTimeout(function() {
                    ajaxSearch(form);
                }, 800);
            }
        });

        $(document).ready(function() {
            ajaxSearch($('form.ajaxSearch'));
        });

        var ajaxSearch = function(form) {
            $.ajax({
                url: form.attr('action') + '/',
                type: form.attr('method'),
                method: form.attr('method'),
                data: {"query": form.find('input[name=query]').val(), "_token": "{{ csrf_token() }}"}
            }).done(function (res) {
                $('#results').html(res);
            }).fail(function (res) {
                alert('Failed search');
            });
        }
    </script>
@endsection
