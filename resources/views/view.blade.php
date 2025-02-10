@extends('layout')
@section('title')
    Student Details
@endsection
@section('content')
    <table class="mt-2 table table-bordered table-striped">
        <tr>
            <th>Student ID:</th>
            <td>{{$student->id}}</td>
        </tr>
        <tr>
            <th>Name:</th>
            <td>{{$student->st_name}}</td>
        </tr>
        <tr>
            <th>Email:</th>
            <td>{{$student->email}}</td>
        </tr>
        <tr>
            <th>Age:</th>
            <td>{{$student->age}}</td>
        </tr>
        <tr>
            <th>Address:</th>
            <td>{{$student->address}}</td>
        </tr>
        <tr>
            <th>Phone:</th>
            <td>{{$student->phone_number}}</td>
        </tr>
        <tr>
            <th>Created At:</th>
            <td>{{$student->created_at}}</td>
        </tr>
        <tr>
            <th>Updated At:</th>
            <td>{{$student->updated_at}}</td>
        </tr>
    </table>
    <a href="{{route('students.index')}}" class="btn btn-sm btn-success">Back</a>
@endsection