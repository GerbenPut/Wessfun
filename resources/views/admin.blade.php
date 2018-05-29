@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Categories</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        ik ben een admin (test)
                        <embed src="http://127.0.0.1:8000/categories" style="width: 690px; height: 400px;">
                        <embed src="http://127.0.0.1:8000/categories/create" style="width: 690px; height: 300px;">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

