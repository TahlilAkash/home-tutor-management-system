@extends('admin.master')

@section('content')


<div class="container col-6">
  <div class="d-flex justify-content-center"> <h1>Edit Subject</h1></div>
  <form action="{{route('subject.update',$subject->id)}}" method="post">
    @csrf
    @method('put')

    <div class="form-group">
      <label for="">Subject Name</label>
      <input value="{{$subject->name}}" required type="text" class="form-control" id="" name="subject_name" placeholder="Enter Subject Name">
    </div>

    

    <div class="form-group">
      <label for="">Description</label>
      <textarea class="form-control" placeholder="Enter Subject description" name="description" id="" cols="30" rows="5">{{$subject->description}}</textarea>
      <!-- <input type="textarea" class="form-control" id="" name="description" placeholder="Subject Description"> -->
    </div>

    <button type="submit" class="btn btn-primary text-dark">Submit</button>
  </form>
</div>
@endsection