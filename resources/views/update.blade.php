@extends('layout')
@section('title')
    Update Student Information
@endsection
@section('content')
    <form action="{{route('students.update',$student->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3 mt-3">
            <label for="name" >Name</label>
            <input type="text" name="st_name" value="{{$student->st_name}}" placeholder="Enter Your Name" class="form-control">
            @error('st_name')
              <span class="text-danger">{{$message}}</span>  
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" >Email</label>
            <input type="email" name="email" value="{{$student->email}}" placeholder="Enter Your Email" class="form-control">
            @error('email')
              <span class="text-danger">{{$message}}</span>  
            @enderror
        </div>
        <div class="mb-3">
            <label for="address" >Address</label>
            <input type="text" name="address" value="{{$student->address}}" placeholder="Your address" class="form-control">
            @error('address')
              <span class="text-danger">{{$message}}</span>  
            @enderror
        </div>
        <div class="mb-3">
            <label for="age" >Age</label>
            <input type="number" name="age" min="18" value="{{$student->age}}" class="form-control">
            @error('age')
              <span class="text-danger">{{$message}}</span>  
            @enderror
        </div>
        <div class="mb-3">
            <label for="phone" >Phone</label>
            <input type="tel" name="phone_number" value="{{$student->phone_number}}" class="form-control">
            @error('phone_number')
              <span class="text-danger">{{$message}}</span>  
            @enderror
        </div>
        <div class="mb-3">
            <input type="submit" value="Update" class="btn btn-success">
        </div>
    </form>
@endsection