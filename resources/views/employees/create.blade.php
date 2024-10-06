@extends('layout')

@section('page-content')

<p class="">
    <a class= 'btn btn-primary' href="{{route('home')}}">go to Home</a>
</p>
    <legend>Create Book</legend>
    <form method="POST" action="{{route('employees.store')}}">
        {{ csrf_field() }}
    <div class="mb-3">
        <label for="name" class="form-label">Employee Name</label>
        <input type="text" class="form-control" name='name' placeholder="Employee name" value="{{old('name')}}">
        <div>{{$errors->first('name')}}</div>
      </div>

      <div class="mb-3">
        <label for="job_title" class="form-label">Job Title</label>
        <input type="text" class="form-control" name="job_title" placeholder="Job Title" value="{{old('job_title')}}">
        <div>{{$errors->first('job_title')}}</div>
      </div>

      <div class="mb-3">
        <label for="joining_date" class="form-label">Joining Date</label>
        <input type="date" class="form-control" name="joining_date" placeholder="Job Title" value="{{old('joining_date')}}">
        <div>{{$errors->first('joining_date')}}</div>

      </div>

      
      <div class="mb-3">
        <label for="salary" class="form-label">Salary</label>
        <input type="number" class="form-control" name="salary" placeholder="Salary" value="{{old('salary')}}">
        <div>{{$errors->first('salary')}}</div>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Email" value="{{old('email')}}">
        <div>{{$errors->first('email')}}</div>
      </div>

      <div class="mb-3">
        <label for="mobile_no" class="form-label">Mobile Number</label>
        <input type="text" class="form-control" name="mobile_no" placeholder="Mobile Number" value="{{old('mobile_no')}}">
        <div>{{$errors->first('mobile_no')}}</div>
      </div>

      <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control" name="address" placeholder="address" value="{{old('address')}}">
        <div>{{$errors->first('address')}}</div>
      </div>

      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection



