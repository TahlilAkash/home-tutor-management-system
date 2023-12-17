@extends('frontend.master')

@section('content')

<div class="container">
    <form action="{{route('my.post.update',$postEdit->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        {{-- <div class="form-group">
            <label for="exampleInputEmail1">Email address:</label>
            <input required value="{{$postEdit->email}}" name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div> --}}
        <div class="form-group">
            <label for="">Contact: </label>
            <input value="{{$postEdit->contact}}" type="tel" name="contact" class="form-control" id="" placeholder="Contact">
        </div>
        <div class="form-group">
            <label for="">Salary: </label>
            <input value="{{$postEdit->salary}}" required type="number" name="salary" class="form-control" id="" placeholder="Salary">
        </div>

        <div class="form-group">
            <label for="">Class List </label>
            
            <select required class="form-control" name="class_list" id="">
                <option value="{{$postEdit->class_list}}">{{$postEdit->class_list}}</option>
               
                @foreach ($classts as $classt)
                
                <option value="{{$classt->name}}">{{$classt->name}}</option>
                @endforeach
        
            </select>
        </div>

        <div class="form-group">
            <label for="">Subject Name</label>
           
            <select required class="form-control" name="subject_name" id="">
                <option value="{{$postEdit->subject_name}}">{{$postEdit->subject_name}}</option>
                
                @foreach ($subjects as $subject)
                <option value="{{$subject->name}}">{{$subject->name}}</option>
                @endforeach
        
            </select>
        </div>
        
        <div class="form-group">
            <label for="">Address:</label>
            <textarea class="form-control" name="address" id="" cols="15" rows="5">{{$postEdit->address}}</textarea>
        </div>
        <div class="form-group">
            <label for="">Update Your Image: </label>
            <input value="{{$postEdit->image}}" name="image" type="file" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


</div>
@endsection

