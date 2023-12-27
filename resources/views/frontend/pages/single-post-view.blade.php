@extends('frontend.master')
@section('content')


<div class="container  mt-5">
    <div class="row justify-content-center">
        
            
                <div class="col-lg-4 mb-4 mb-lg-0 " >
                    <div class="testimonial-2 mb-4">
                        
                        @if($singlepost->role=='student')
                        <h3 class="h5">Need tuitor !</h3>
                        @else 

                        <h3 class="h5">Need Tuition</h3>
                        @endif
                       

                        <div class="d-flex v-card align-items-center">
                            <img src="{{url('/uploads/'.$singlepost->image)}}" alt="img" style="width: 50px; height: 50px; object-fit: cover; border: 1px solid rgb(172, 169, 169); border-radius:60%; color:black;">
                        </div>
                        <h6>Name: {{$singlepost->name}}</h6>                       
                        <h6>Role: {{$singlepost->role}}</h6>
                        <h6>Email Address: {{$singlepost->email}}</h6>
                        <h6>Address: {{$singlepost->address}}</h6>
                        <h6>Class: {{$singlepost->class_list}}</h6>
                        <h6>Subject: {{$singlepost->subject_name}}</h6>
                        <h6>Salary: {{$singlepost->salary}} .BDT</h6>
                        <h6>Contact: {{$singlepost->contact}}</h6>
                        
                        @php
                            $userApplied = $singlepost->applications()->where('user_id', auth('member')->user()->id)->get();
                        @endphp

                        
                        @if ($userApplied->isEmpty())
                            <a class="btn btn-primary" href="{{ route('apply.post.now', $singlepost->id) }}" role="button">Apply</a>
                        @elseif ($userApplied->first()->status == 'cancelled')
                             <p style="color: rgb(106, 0, 255); margin-top:5px;">Your Request Is Cancelled</p>
                        @elseif ($userApplied->first()->status == 'accepted')
                            <p style="color: rgb(0, 255, 30); margin-top:5px;">Your Request Is Accepted</p>
                        @else
                            <p style="color: red; margin-top:5px;">You Already Applied to This Post</p>
                        @endif

                        
                        {{-- @if(!$singlepost->applications()->where('user_id', auth('member')->user()->id)->exists())
                            <a class="btn btn-primary" href="{{ route('apply.post.now', $singlepost->id) }}" role="button">Apply</a>
                        @else
                            <p style="color: red; margin-top:5px;">You Already Applied to This Post</p>
                        @endif --}}

                        

                        
                    </div>
                </div>
            
        
    </div>
</div>
@endsection