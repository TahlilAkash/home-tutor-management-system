@extends('admin.master')

@section('content')

<div class="container">
  <form action="{{route('subject.store')}}" method="post">
    @csrf
    <div class="form-group">
      <label for="">Subject Name</label>
      <input required type="text" class="form-control" id="" name="subject_name" placeholder="Enter Subject Name">
    </div>

    <!-- <div class="form-group">
      <label for="">Subject Code</label>
      <input type="number" class="form-control" id="" name="code" placeholder="Enter Subject Code">
    </div> -->

    <div class="form-group">
      <label for="">Description</label>
      <textarea class="form-control" placeholder="Enter Subject description" name="description" id="" cols="30" rows="5"></textarea>
      <!-- <input type="textarea" class="form-control" id="" name="description" placeholder="Subject Description"> -->
    </div>

    <button type="submit" class="btn btn-primary text-dark">Submit</button>
  </form>
</div>
@endsection