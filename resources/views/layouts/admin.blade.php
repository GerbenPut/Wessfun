@extends('layouts.app')
<head>
    <link href="{{asset('scss/style.scss')}}" rel="stylesheet">
</head>
@section('content')
    <br><br>
    <form style="width: 30%; float: left; margin-left: 19%;" action="http://127.0.0.1:8000/advertisements">
        <input class="backbutton" type="submit" value="Advertisements" />
    </form>
    <form style="width: 30%; float: right; margin-right: 19%;" action="http://127.0.0.1:8000/categories">
        <input class="backbutton" type="submit" value="Categories" />
    </form>
@endsection


