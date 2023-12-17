@extends('admin.master')

@section('content')

<form action="{{route('tuition.store')}}"method="post">
    @csrf
    
    <div class="form-group">
        <label for="">Select Subject:</label>
        <select required class="form-control" name="subject_id" id="">

            <!-- select option from subject table -->
            @foreach ($subjects as $subject)
            <option value="{{$subject->id}}">{{$subject->name}}</option>
            @endforeach

        </select>
    </div>

    <div class="form-group">
        <label for="">Select Class:</label>
        <select required class="form-control" name="classt_id" id="">

            <!-- select option from classt table -->
            @foreach ($classts as $classt)
            <option value="{{$classt->id}}">{{$classt->name}}</option>
            @endforeach

        </select>
    </div>

    <!-- <div class="form-group">
        <label for="">Tuiton Type:</label>
        <input required type="text" class="form-control" id="" name="type" placeholder="online or offline">
        @error('type')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div> -->
    

    <div class="form-group">
        <label for="">Select Institute:</label>
        <select required class="form-control" name="institute_id" id="">

            @foreach ($institutes as $institute )
            <option value="{{$institute->id}}">{{$institute->name}}</option>
            @endforeach

        </select>
    </div>

    <!-- <div class="form-group">
        <label for="">Enter Salary: </label>
        <input required type="number" class="form-control" placeholder="Preferable Salary" name="preferable_salary">
        @error('preferable_salary')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div> -->

    <button type="submit" class="btn btn-primary text-dark">Submit</button>
</form>


@endsection