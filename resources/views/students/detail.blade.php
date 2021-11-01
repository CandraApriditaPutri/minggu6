@extends('layouts.app')

@section('content')
<h1 align="center"> JURUSAN TEKNOLOGI INFORMASI - POLITEKNIK NEGERI MALANG</h1><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>KARTU HASIL STUDI (KHS)</h2></div>

                <div class="card-body">
                    <b>Name</b>     : {{ $student->name }} <br>
                    <b>NIM</b>      : {{ $student->nim }} <br>
                    <b>Class</b>    : {{ $student->kelas->class_name }} <br>
                    <table class="table table-responsive table-striped">
                        <thead>
                            <tr>
                                <th> Course Name </th>
                                <th> Semester </th>
                                <th> SKS </th>
                                <th> Score </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($student->courses as $sc)
                            <tr>
                                <td> {{ $sc->course_name }} </td>
                                <td> {{ $sc->semester }} </td>
                                <td> {{ $sc->sks }} </td>
                                <td> {{ $sc->pivot->nilai }} </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a href="/students/{{$student->id}}/report" class="btn btn-primary" target="_blank">PRINT PDF</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection