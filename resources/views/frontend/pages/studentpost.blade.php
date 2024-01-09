@extends('frontend.master')

@section('content')

<div class="container mt-5">
    <!-- enctype="multipart/form-data" -->
    <form action="{{route('student.tuition.post.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="">Role:</label>
            <select required class="form-control" name="role" id="">

                <option value="student">Student</option>
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
                <option value="Six">Six</option>
                <option value="Seven">Seven</option>
                <option value="Eight">Eight</option>
                <option value="Nine">Nine</option>
                <option value="Ten">Ten</option>
                <option value="Eleven">Eleven</option>
                <option value="Twelve">Twelve</option>
            </select> --}}
            <select required class="form-control" name="class_list" id="">
                <option style="display: none" >--select class--</option>
                <!-- select option from subject table -->

                @foreach ($classts as $classt)
                 {{-- teacher post controller theke jaa pathaisi=$classts --}}
                <option value="{{$classt->name}}">{{$classt->name}}</option>
                @endforeach
    
            </select>
        </div>

        <div class="form-group">
            <label for="">Subject Name</label>
            {{-- <input required type="text" class="form-control" id="" name="subject_name" placeholder="Enter Subject Name"> --}}
            <select required class="form-control" name="subject_name" id="">
                <option style="display: none" >--select subject--</option>
                <!-- select option from subject table -->
                @foreach ($subjects as $subject)
                <option value="{{$subject->name}}">{{$subject->name}}</option>
                @endforeach
    
            </select>
        </div>

        {{-- <div class="form-group">
            <label for="">Contact: </label>
            <input type="number" name="contact" class="form-control" id="contact" placeholder="Contact" required >
        </div> --}}
        
        <div class="form-group">
            <label for="">Salary: </label>
            <input required type="number" name="salary" class="form-control" id="salary" placeholder="Salary" min="1000" max="15000">
        </div>


        <div class="form-group">
            <label for="">Address:</label>
            {{-- <textarea class="form-control" name="address" id="" cols="15" rows="5"></textarea> --}}
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