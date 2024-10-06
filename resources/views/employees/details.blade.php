@extends('layout')

@section('page-content')
    <h3>Employees Details</h3>
    <table border="1" class="table table-striped">
        <tr>
            <th>ID</th>
            <td>{{$e->id}}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{$e->name}}</td>
        </tr>
        
        <tr>
        <th> Job Title</th>
        <td>{{$e->job_title}}</td>
        </tr> 
        
        <tr>
            <th> Joining Date</th>
            <td>{{$e->joining_date}}</td>
        </tr>

        <tr>
            <th> Salary</th>
            <td>{{$e->salary}}</td>
        </tr>

        <tr>
            <th> Email</th>
            <td>{{$e->email}}</td>
        </tr>
        <tr>
            <th> phone</th>
            <td>{{$e->mobile_no}}</td>
        </tr>
        <tr>
            <th> Address</th>
            <td>{{$e->address}}</td>
        </tr>
        
        
    </table>

    <button style="margin-top: 50px"><a href="{{route('home')}}">Go back</a></button>
    

@endsection



