@extends('layout')
@section('title')
    All Students Details
@endsection
@section('content')
    <a href="{{route('students.create')}}" class="btn btn-success btn-sm m-3">Add Student</a>
    <table class="table table-striped table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Address</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>view</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{$loop->index + 1 }}</td>
            <td>{{$student->st_name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->age}}</td>
            <td>{{$student->address}}</td>
            <td>{{$student->created_at}}</td>
            <td>{{$student->updated_at}}</td>
            <td><a href="{{route('students.show',$student->id)}}" class="btn btn-info btn-sm">View</a></td>
            <td><a href="{{route('students.edit',$student->id)}}" class="btn btn-warning btn-sm">Edit</a></td>
            <form action="{{route('students.destroy',$student->id)}}" method="POST">
                @csrf
                @method('DELETE')  <!-- This will send a DELETE request -->
               <td><button type="submit" class="btn btn-danger btn-sm">Delete</button></td> 
            </form>
            
        </tr>
        @endforeach
    </table>

@endsection