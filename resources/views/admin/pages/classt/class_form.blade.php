@extends('admin.master')

@section('content')

<div class="container">
    <form action="{{route('class.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Class Name</label>
            {{-- <select required class="form-control" name="class_name" id="" placeholder="Enter the Class">

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
            
                
            <input required type="text" class="form-control" id="" name="class_name" placeholder="Enter Class Name">
        </div>
        

        <div class="form-group">
            <label for="">Enter Description:</label>
            <textarea class="form-control" placeholder="Enter Class description" name="class_description" id="" cols="30" rows="5"></textarea>
        </div>



        <button type="submit" class="btn btn-primary text-dark">Submit</button>
    </form>
</div>
@endsection