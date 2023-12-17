@extends('admin.master')
@section('content')
<h3>Institute List</h3>
<a class =" btn btn-success" href="{{route('institute.form')}}">Add Institute Info </a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Institute_Name</th>
      <!-- <th scope="col">Institute Logo</th> -->
      <th scope="col">Location</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach($institutes as $institute)
      <th scope="row">{{$institute->id}}</th>
      <td>{{$institute->name}}</td>
      <!-- <td>{{$institute->dept_name}}</td> -->
      <td>{{$institute->location}}</td>

        <td>
            <a href="" class="btn btn-success">Edit</a>
            <a href="" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach
    
  </tbody>
</table>

@endsection