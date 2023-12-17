@extends('frontend.master')
@section('content')
    <div class="container mt-5">
            <h3>View My Post</h3>


        <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Class Name</th>
            <th scope="col">Subject Name</th>
            <th scope="col">Salary</th>
            <th scope="col">Contact</th>
            <th scope="col">Status</th>
            {{-- <th scope="col">Action</th> --}}
            {{-- <th scope="col">Action</th> --}}
            </tr>
        </thead>
        <tbody>
            
            @foreach($myPost as $key=>$mp)
            <tr>
            <th scope="row">{{$key+1}}</th> 
            <td>{{$mp->class_list}}</td>       
            <td>{{$mp->subject_name}}</td>
            <td>{{$mp->salary}}.BDT</td>
            <td>{{$mp->contact}}</td>
            <td>{{$mp->status}}</td>
            
            
            {{-- <td><img class="img" src="{{url('/uploads/'.)}}" alt="img"></td> --}}
            
            {{-- <td>
                <a href="#" class="btn btn-success">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </td> --}}
            </tr>
            @endforeach
        
        </tbody>
        </table>

    </div>

@endsection