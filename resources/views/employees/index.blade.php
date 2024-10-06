@extends('layout')

@section('page-content')

    <p class="text-end">
        <a class= 'btn btn-primary' href="{{route('employees.create')}}"> New Employee</a>
    </p>

  

    <h3>Employees List</h3>
    <table class="table table-striped" border="1">
        <thead class="thead-dark">
            <th>ID</th>
            <th>Name</th>
            <th> Job Title</th>
            <th></th>
            <th>More</th>
            <th></th>
        </thead>
        @foreach ($es as $e)
        <tr>
            <td>{{$e->id}}</td>
            <td>{{$e->name}}</td>
            <td>{{$e->job_title}}</td>
            <td><a href="{{route('employees.details', $e->id)}}">Details</a></td>
            <td><a href="{{route('employees.edit', $e->id)}}">Update</a></td>
            <td>
                <form method="post" action="{{ route('employees.delete', $e->id) }}" onsubmit="return confirm('Are you sure you want to delete this info?')" class="me-3">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-link p-0" style="text-decoration: underline;">Delete</button>
                </form>    
            </td>

        </tr>       
    @endforeach
    </table>
    {{$es->links()}}
    
    {{-- <legend>Create Book</legend>
    <form method="" action="#">
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value="" id="title" name="title"
                       placeholder="Title">
                <div class="invalid-feedback">Error message</div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form> --}}

@endsection



