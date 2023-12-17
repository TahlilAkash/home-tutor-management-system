@extends('admin.master')

@section('content')
<h3>Tuition Info</h3>
<a class="btn btn-success" href="{{route('tuition.form')}}">Add Tution Info</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Subject Name</th>
      <!-- <th scope="col">Tuition Type</th> -->
      <th scope="col">Class Name</th>
      <th scope="col">Institute Name</th>
      <!-- <th scope="col">Salary</th> -->
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tuitions as $key=>$tuition)

    <tr>
      <th scope="row">{{$key+1}}</th>
      {{-- <th scope="row">{{$tuition->id}}</th> --}}

      <td>{{$tuition->subject->name}}</td>
      <!-- objects---relation--table column  if not obj--column -->
      <td>{{$tuition->classt->name}}</td>

      <!-- <td>{{$tuition->tuition_type}}</td> -->
      <td>{{$tuition->institute->name}}</td>
      <!-- <td>{{$tuition->salary}} .BDT</td> -->
      <td>
        <a href="" class="btn btn-success">Edit</a>
        <a href="" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$tuitions->links() }}
@endsection