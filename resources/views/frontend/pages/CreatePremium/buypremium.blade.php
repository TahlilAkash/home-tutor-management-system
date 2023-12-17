@extends('frontend.master')


@section('content')

    <div class="container">
        <div class="row align-items-center justify-content-center mt-5"  >
            <div class="col-lg-10 text-center">
                <p>Buy <strong>Premium</strong> Now <strong>To Create Post</strong></p>
            </div>
        </div>


        
        {{-- <div class="row ">
            
                    <div class="col-lg-4 mb-4 mb-lg-0 " >
                        <div class="testimonial-2 mb-4">
                            
                            
                            <div class="d-flex v-card align-items-center">
                                <img src="{{url('/uploads/'.$tpost->image)}}" alt="Image" class="img-fluid mr-3">
                            </div>
                            <h6>Name: </h6>                       
                            <h6>Role: </h6>
                            <h6>Email Address: </h6>
                            <h6>Address:</h6>
                            <h6>Class:</h6>
                            <h6>Subject:</h6>
                            <h6>Salary:  .BDT</h6>
                            
                            <a class="btn btn-primary" href="" role="button">Buy Now</a>
                            
                            
                            
                        </div>
                    </div>
       
           
        </div> --}}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="testimonial-2 mb-4">
                        <div class="d-flex v-card align-items-center">
                            {{-- <img src="{{url('/uploads/'.$tpost->image)}}" alt="Image" class="img-fluid mr-3"> --}}
                        </div>
                        <h6>Unlock Premium Features</h6>
                        <p>Upgrade to premium to access exclusive benefits!!</p>
                        
                        <h6>Price 100. BDT</h6>
        
                        <a class="btn btn-primary" href="{{route('buy.subscription',auth('member')->user()->id)}}" role="button">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@endsection