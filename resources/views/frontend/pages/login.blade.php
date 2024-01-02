@extends('frontend.master')


@section('content')

<div class="container col-3 mt-5 p-3" style="border: 2px solid;">
        {{-- @include('notify::components.notify') --}}

        {{-- <div>        #####jodi session lage log in korar somoy // 
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
            @endif
        </div> --}}
    <form action="{{route('member.do.login')}}" method=post>
    
        @csrf


        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input required name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input required name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>

        
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
@endsection