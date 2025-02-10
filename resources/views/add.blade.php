@extends('layout')
@section('title')
    Add new Student
@endsection
@section('content')
    <form action="{{route('students.store')}}" method="POST">
        @csrf
        <div class="mb-3 mt-3">
            <label for="name" >Name</label>
            <input type="text" name="st_name" placeholder="Enter Your Name" class="form-control">
            @error('st_name')
              <span class="text-danger">{{$message}}</span>  
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" >Email</label>
            <input type="email" name="email" placeholder="Enter Your Email" class="form-control">
            @error('email')
              <span class="text-danger">{{$message}}</span>  
            @enderror
        </div>
        <div class="mb-3">
            <label for="address" >Address</label>
            <input type="text" name="address" placeholder="Your address" class="form-control">
            @error('address')
              <span class="text-danger">{{$message}}</span>  
            @enderror
        </div>
        <div class="mb-3">
            <label for="age" >Age</label>
            <input type="number" name="age" min="18" class="form-control">
            @error('age')
              <span class="text-danger">{{$message}}</span>  
            @enderror
        </div>
        <div class="mb-3">
            <label for="phone" >Phone</label>
            <input type="tel" name="phone_number"  class="form-control">
            @error('phone_number')
              <span class="text-danger">{{$message}}</span>  
            @enderror
        </div>
        <div class="mb-3">
            <input type="submit" value="submit" class="btn btn-success">
        </div>
    </form>
@endsection