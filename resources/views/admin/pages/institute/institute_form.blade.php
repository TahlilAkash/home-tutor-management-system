@extends('admin.master')
@section('content')

<form action="{{route('institute.store')}}" method="post">
@csrf
  <div class="form-group">
    <label for="">Institute Name</label>
    <input requiredph type="text" class="form-control" id="" name="institute_name" placeholder="Enter Institute Name">
  </div>

  <!-- <div class="form-group">
    <label for="">Department_Name</label>
    <input type="text" class="form-control" id="" name="department_name" placeholder="Enter Department Name">
  </div> -->

  <div class="form-group">
    <label for="">Location</label>
    <input type="string" class="form-control" id="" name="location" placeholder="Enter the Address">
  </div>

  <button type="submit" class="btn btn-primary text-dark">Submit</button>
</form>
@endsection