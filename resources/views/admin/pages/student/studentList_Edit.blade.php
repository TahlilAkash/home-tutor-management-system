@extends('admin.master')

@section('content')

<div class="container">
    <!-- enctype="multipart/form-data" -->
    <h2 class="mb-3" style="font-size: 30px">Student Post</h2>
    <form action="{{route('studentlist.update',$stuEdit->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <h3>Admin Approval</h3><br>
        <div class="form-group">
            <label for="">Status</label>
           
            <select required class="form-control" name="status" id="">
                <option @if($stuEdit->status=='pending') selected @endif value="pending">Pending</option>
                <option @if($stuEdit->status=='approved') selected @endif value="approved">Approved</option>
                {{-- <option @if($stuEdit->status=='cancel') selected @endif value="cancel">Cancel</option> --}}
            </select>
        </div>
<hr>  
        
        
        
        <div class="form-group">
            <label for="name">Name:</label>
            <input value="{{$stuEdit->name}}" name="name" type="text" class="form-control" id="name" placeholder="Enter your name">

        </div>

        <div class="form-group">
            <label for="">Role:</label>
            <select required class="form-control" name="role" id="">

                <option value="{{$stuEdit->role}}">Student</option>
                
                
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email address:</label>
            <input value="{{$stuEdit->email}}" name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

        </div>

        

        <div class="form-group">
            <label for="">Class List </label>
            
            <select required class="form-control" name="class_list" id="">
                <option value="{{$stuEdit->class_list}}">{{$stuEdit->class_list}}</option>
               
                @foreach ($classts as $classt)
                
                <option value="{{$classt->name}}">{{$classt->name}}</option>
                @endforeach
    
            </select>
        </div>


        <div class="form-group">
            <label for="">Subject Name</label>
           
            <select required class="form-control" name="subject_name" id="">
                <option value="{{$stuEdit->subject_name}}">{{$stuEdit->subject_name}}</option>
                
                @foreach ($subjects as $subject)
                <option value="{{$subject->name}}">{{$subject->name}}</option>
                @endforeach
    
            </select>
        </div>
        
        <div class="form-group">
            <label for="">Salary: </label>
            <input value="{{$stuEdit->salary}}" required type="number" name="salary" class="form-control" id="" placeholder="Salary">
        </div>

        <div class="form-group">
            <label for="">Contact: </label>
            <input value="{{$stuEdit->contact}}" type="tel" name="contact" class="form-control" id="" placeholder="Contact">
        </div>


        <div class="form-group">
            <label for="">Address:</label>
            <textarea  class="form-control" name="address" id="" cols="15" rows="5">{{$stuEdit->address}}</textarea>
        </div>

        


        <div class="form-group">
            <label for="">Upload Your Image: </label>
            <input value="{{$stuEdit->image}}" name="image" type="file" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


</div>
@endsection