@extends('frontend.master')

@section('content')

<div class="container col-3  ">
  {{-- enctype="multipart/form-data" --}}
  <form action="{{route('member.store')}}" method="post" enctype="multipart/form-data">
  @include('notify::components.notify')
    @csrf
    <div class="form-group ">
      <label for="name">Name:</label>
      <input require name="name" type="text" class="form-control" id="name" placeholder="Enter your name">

    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input required name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

    </div>

    <div class="form-group">
      <label for="">Role</label>
      <select required class="form-control" name="role" id="">
        
          <option value="student">Student</option>
          <option value="teacher">Teacher</option>

      </select>
    </div>

        {{-- <div class="form-group">
          <label for="">Contact: </label>
          <input type="tel" name="contact" class="form-control" id="" placeholder="Contact">
        </div>
      
        <div class="form-group">
            <label for="">Upload Your Image: </label>
            <input name="image" type="file" class="form-control">
        </div> --}}


    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input required name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>

    <div class="form-group">
      <label for="">Upload Your Image: </label>
      <input name="image" type="file" class="form-control">
    </div>


    <button type="submit" class="btn btn-primary">Registration</button>
  </form>
</div>

@endsection