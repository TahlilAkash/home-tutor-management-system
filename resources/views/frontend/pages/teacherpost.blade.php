@extends('frontend.master')

@section('content')

<div class="container mt-5">
    
    <!-- enctype="multipart/form-data" -->
    
        <form action="{{route('teacher.tuition.post.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Role:</label>
                <select required class="form-control" name="role" id="">

                    <option value="tutor">Tutor</option>
                    <!-- <option value="student">Student</option> -->
                </select>
            </div>

            {{-- <div class="form-group">
                <label for="exampleInputEmail1">Email address:</label>
                <input required name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

            </div> --}}

            <div class="form-group">
                <label for="">Class List </label>
                {{-- <select required class="form-control" name="class_list" id="">
                    <option value="Four">Four</option>
                    <option value="Five">Five</option>
                </select> --}}
                <select required class="form-control" name="class_list" id="">
                    {{-- <option style="display: none" >--select class--</option> --}}
                    <!-- select option from subject table -->

                    @foreach ($classts as $classt)
                    {{-- teacher post controller theke jaa pathaisi=$classts --}}
                    <option value="{{$classt->name}}">{{$classt->name}}</option>
                    @endforeach
        
                </select>
            </div>

            <div class="form-group">
                <label for="">Subject Name</label>
                
                <select required class="form-control" name="subject_name" id="">
                    {{-- <option style="display: none" >--select subject--</option> --}}
                    <!-- select option from subject table -->
                    @foreach ($subjects as $subject)
                    <option value="{{$subject->name}}">{{$subject->name}}</option>
                    @endforeach
        
                </select>
            </div>

            {{-- <div class="form-group">
                <label for="">Subject description</label>
                
                <select required class="form-control" name="subject_name" id="">
                    
                    @foreach ($subjects as $subject)
                    <option value="{{$subject->description}}">{{$subject->description}}</option>
                    @endforeach
        
                </select>
            </div> --}}

            {{-- <div class="form-group">
                <label for="">Contact: </label>
                <input required type="number" name="contact" class="form-control" id="" placeholder="Contact">
            </div> --}}
            
            <div class="form-group">
                <label for="">Salary: </label>
                <input required type="number" name="salary" class="form-control" id="contact" placeholder="Salary"  min="1000" max="15000">
            </div>


            <div class="form-group">
                <label for="">Address:</label>
                <textarea class="form-control" name="address" id="address" cols="15" rows="5" required></textarea>
            </div>

            {{-- <div class="form-group">
                <label for="">Upload Your Image: </label>
                <input name="image" type="file" class="form-control">
            </div> --}}

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    
</div>
@endsection