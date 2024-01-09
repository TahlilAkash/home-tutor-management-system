@extends('frontend.master')


@section('content')
<div class="container" >
 <div class="row d-flex align-items-center justify-content-center"style="height: 70vh ">
    <div class="col-md-4 ">
        <div class="card" style="border-radius: 15px; background-color:#424242">
            <div class="card-body text-center">
              <div class="mt-3 mb-4 d-flex justify-content-center">
                <img src="{{url('/uploads/'. auth('member')->user()->image)}}"
                        class="mt-3 rounded-circle img-fluid" style="width: 100px; height: 100px; object-fit: cover; object-position: top; border: 2px solid #dddddd;      color: white;"  
                        alt="img" />
              </div>

              {{-- <div class="mt-3 mb-4 d-flex justify-content-center">
                <img src="{{ url('/uploads/' . auth('member')->user()->image) }}" alt="Profile Picture"
                  class="rounded-circle img-fluid" style="width: 100px;" />
              </div> --}}
              
            <div>
              <a  href="{{route('profile.edit',auth('member')->user()->id)}}" class="btn btn-rounded text-white mb-2" style="background-color: rgb(255, 187, 0); border-color:rgb(255, 187, 0) ;" > Edit Profile info</a> 

                <h5 class="mb-2 text-white">Full Name: {{ auth('member')->user()->name }}</h5>
                
                <h5 class="mb-2 text-white">Email :{{ auth('member')->user()->email }}</h5>
                
                <h5 class="mb-2 text-white">Role :{{ auth('member')->user()->role }}</h5>
                <h5 class="mb-2 text-white">Contact :{{ auth('member')->user()->contact }}</h5>

                <a class="btn btn-primary btn-rounded btn-lg text-white mb-3" href="{{Route('my.post',auth('member')->user()->id)}}">My Post</a>
                <a class="btn btn-primary btn-rounded btn-lg text-white mb-3" href="{{Route('applicent',auth('member')->user()->id)}}">Applyed</a>
                {{-- <div class="d-flex justify-content-between text-center mt-5 mb-2">
                        <div>
                            <p class="mb-2 h5 text-white">8471</p>
                            <p class="text-muted mb-0" style="color: white !important">Wallets Balance</p>
                        </div>
                        <div class="px-3">
                            <p class="mb-2 h5 text-white">8512</p>
                            <p class="text-muted mb-0 text-white">Income amounts</p>
                        </div>
                        <div>
                            <p class="mb-2 h5 text-white">4751</p>
                            <p class="text-muted mb-0 text-white">Total Transactions</p>
                        </div>
                </div> --}}
            </div>
          </div>
    </div>
    </div>
 </div>

<div class="container">

    <div class="row d-flex align-items-center justify-content-center  ">
        <div class="col-md-3">
              <table class="text-dark table table-sm table-dark">
                <div class="text-dark"> <h6>Request on my post</h6> </div>
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>

                    <th scope="col">Class</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Address</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($request as $details)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$details->member->name}}</td>
                            <td>{{$details->member->email}}</td>
                            <td>{{$details->member->contact}}</td>

                            <td>{{$details->TuitionPost->class_list}}</td>
                            <td>{{$details->TuitionPost->subject_name}}</td>
                            <td>{{$details->TuitionPost->address}}</td>
                            <td>{{$details->TuitionPost->salary}}</td>
                            <td>{{$details->status}}</td>
                            <td>
                              @if($details->status == 'pending')
                                  <a class="btn btn-danger" href="{{ route('apply.accepted', $details->id) }}">Accept Apply</a>
                              @endif

                              @if(in_array($details->status, ['accepted', 'pending']))
                                  <a class="btn btn-danger" href="{{ route('apply.cancel', $details->id) }}">Cancel Apply</a>
                              @endif
                            </td>

                        </tr> 
                  @endforeach  
                </tbody>
              </table>
        </div>
    </div>  
</div>    
@endsection