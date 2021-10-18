@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Detail User') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="/users/{{$user->id}}" method="post">
                    <table class="table table-responsive">
                        <tr><th>ID</th><th>:</th><td>{{ $user->id }}</td></tr>
                        <tr><th>Username</th><th>:</th><td>{{ $user->username }}</td></tr>
                        <tr><th>Name</th><th>:</th><td>{{ $user->name }}</td></tr>
                        <tr><th>Email</th><th>:</th><td>{{ $user->email }}</td></tr>
                        <tr><th>Password</th><th>:</th><td>{{ $user->password }}</td></tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection