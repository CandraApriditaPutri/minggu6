@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Detail Student') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="/students/{{$student->id}}" method="post">
                    <table class="table table-responsive">
                        <tr><th>ID</th><th>:</th><td>{{ $student->id }}</td></tr>
                        <tr><th>NIM</th><th>:</th><td>{{ $student->nim }}</td></tr>
                        <tr><th>Name</th><th>:</th><td>{{ $student->name }}</td></tr>
                        <tr><th>Department</th><th>:</th><td>{{ $student->department }}</td></tr>
                        <tr><th>Phone Number</th><th>:</th><td>{{ $student->phone_number }}</td></tr>
                        <tr><th>Created At</th><th>:</th><td>{{ $student->created_at }}</td></tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection