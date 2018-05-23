@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        @role('User', 'web')
                        I am a user!
                        @else
                        I am not a User...
                        @endrole
                        <br>
                        @role('RegisteredUser', 'web')
                        I am a RegisteredUser!
                        @else
                        I am not a RegisteredUser...
                        @endrole
                        <br>
                        @role('Admin', 'web')
                        I am a Admin!
                        @else
                        I am not an Admin...
                        @endrole
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
