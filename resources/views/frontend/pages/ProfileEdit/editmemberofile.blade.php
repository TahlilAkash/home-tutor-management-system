@extends('frontend.master')

@section('content')

<div class="container col-3 "  style="border: 2px solid; padding:10px; margin-top:25px">
  
  <form action="{{ route('profile.update', $memprofileVar->id) }}" method="post" enctype="multipart/form-data">
    
    @csrf
    @method('put')
    <div class="form-group ">
      <label for="name" class="text-center">Name:</label>
      <input require value="{{$memprofileVar->name}}" name="name" type="text" class="form-control" id="name" placeholder="Enter your name">

    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input required value="{{$memprofileVar->email}}"name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input required name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>

    <div class="form-group">
      <label for="">Upload Your Image: </label>
      <input value="{{$memprofileVar->image}}" name="image" type="file" class="form-control">
    </div>


    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>

@endsection