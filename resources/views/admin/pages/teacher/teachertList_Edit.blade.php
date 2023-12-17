@extends('admin.master')

@section('content')


<div class="container">
    <h2 class="mb-3" style="font-size: 30px">Update {{$teacherEdit->role}} Post Status</h2>
    <!-- enctype="multipart/form-data" -->
    <form action="{{route('teacherlist.update',$teacherEdit->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <h3>Admin Approval</h3><br>
        <div class="form-group">
            <label for="">Status</label>
           
            <select required class="form-control" name="status" id="">
                <option @if($teacherEdit->status=='pending') selected @endif value="pending">Pending</option>
                <option @if($teacherEdit->status=='approved') selected @endif value="approved">Approved</option>
                {{-- <option @if($teacherEdit->status=='cancel') selected @endif value="cancel">Cancel</option> --}}
            </select>
        </div>
{{-- <hr>
        <div class="form-group">
            <label for="name">Name:</label>
            <input value="{{$teacherEdit->name}}" name="name" type="text" class="form-control" id="name" placeholder="Enter your name">

        </div>

        <div class="form-group">
            <label for="">Role:</label>
            <select required class="form-control" name="role" id="">

                <option value="{{$teacherEdit->role}}">Tuitor</option>
                
                
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email address:</label>
            <input value="{{$teacherEdit->email}}" name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

        </div>

        

        <div class="form-group">
            <label for="">Class List </label>
            
            <select required class="form-control" name="class_list" id="">
                <option value="{{$teacherEdit->class_list}}">{{$teacherEdit->class_list}}</option>
               
                @foreach ($classts as $classt)
                
                <option value="{{$classt->name}}">{{$classt->name}}</option>
                @endforeach
    
            </select>
        </div>


        <div class="form-group">
            <label for="">Subject Name</label>
           
            <select required class="form-control" name="subject_name" id="">
                <option value="{{$teacherEdit->subject_name}}">{{$teacherEdit->subject_name}}</option>
                
                @foreach ($subjects as $subject)
                <option value="{{$subject->name}}">{{$subject->name}}</option>
                @endforeach
    
            </select>
        </div>
        
        <div class="form-group">
            <label for="">Salary: </label>
            <input value="{{$teacherEdit->salary}}" required type="number" name="salary" class="form-control" id="" placeholder="Salary">
        </div>

        <div class="form-group">
            <label for="">Contact: </label>
            <input value="{{$teacherEdit->contact}}" type="tel" name="contact" class="form-control" id="" placeholder="Contact">
        </div>


        <div class="form-group">
            <label for="">Address:</label>
            <textarea  class="form-control" name="address" id="" cols="15" rows="5">{{$teacherEdit->address}}</textarea>
        </div>

        


        <div class="form-group">
            <label for="">Upload Your Image: </label>
            <input value="{{$teacherEdit->image}}" name="image" type="file" class="form-control">
        </div> --}}

        <button type="submit" class="update-button">Submit</button>
    </form>


</div>
@endsection
<style>
    .update-button {
      display: inline-block;
      padding: 5px 15px;
      font-size: 16px;
      font-weight: bold;
      text-align: center;
      text-decoration: none;
      cursor: pointer;
      border: 2px solid #3498db;
      color: #3498db;
      border-radius: 5px;
      background-color: white;
      transition: background-color 0.3s, color 0.3s;
    }

    .update-button:hover {
      background-color: #3498db;
      color: white;
    }
  </style> 