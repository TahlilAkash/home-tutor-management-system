@extends('frontend.master')
@section('content')
    <div class="site-section-cover overlay  " style="background-color:#303030; min-height:60vh !important;">

        <div class="container">

            <!-- Display search form only when logged in -->

            <!-- end search form only when logged in -->

            <div class="row align-items-center justify-content-center"style="min-height:60vh;">
                <div class="col-lg-10 text-center">
                    <h1>Home <strong>Tutor</strong> Management<strong> System</strong></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- welcome tittle -->
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center mb-5">
                <div class="heading">
                    <span class="caption">Welcome To Tuition Management Site</span>

                </div>
            </div>
        </div>
        <!-- end welcome tittle -->


        <!-- brief section -->
        @if (!auth('member')->check())
            <div class="row ">
                <div class="col-lg-4 mb-4 mb-lg-0 ">
                    <div class="testimonial-2 mb-4" style="height: 300px; ">
                        <h4 style="font-size: 20px; font-weight: bold; text-align: center;"> Need Tuition !</h4>
                        <ul style="list-style-type:circle">
                            <li> Register yourself as a <span style="font-weight: bold;">Teacher</span> </li>
                            <li> You can apply to the student's post</li>
                            <li> Create tuition post</li>
                            <li> Provide the necessary information</li>
                            <li> Please provide your expected salary to a reasonable amount!</li>
                        </ul>
                        <a href="{{ route('member.registration') }}" class="btn btn-primary" style="font-size: 12px;">
                            Register Now</a>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0 ">
                    <div class="testimonial-2 mb-4" style="height: 300px; ">
                        <h4 style="font-size: 20px; font-weight: bold; text-align: center;"> Need Tuitor !</h4>
                        <ul style="list-style-type: circle">
                            <li> Register yourself as a <span style="font-weight: bold;">Student</span> </li>
                            <li> You can apply to the teacher's post</li>
                            <li> Create Need Tutor post</li>
                            <li> Provide the necessary information</li>
                            <li> Please provide your affordable salary. </li>
                        </ul>
                        <a href="{{ route('member.registration') }}" class="btn btn-primary"
                            style="font-size: 12px; margin-top:25px;">
                            Register Now</a>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0 ">
                    <div class="testimonial-2 mb-4" style="height: 300px; ">
                        <h4 style="font-size: 20px; font-weight: bold; text-align: center;"> GET Premium !</h4>
                        <ul style="list-style-type: circle">
                            <li>Upgrade to premium for creating <span style="font-weight: bold;">more post !</span> </li>
                            <li> <span class="d-inline" style="color: red;">"You can only access the Premium option after
                                    creating three posts."</span></li>

                        </ul>
                    </div>
                </div>
            </div>
        @endif
        <!-- end brief section -->


        <!-- cart for post -->


        {{-- Teacher Post --}}
        @if (optional(auth('member')->user())->role == 'student')
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center mb-5">

                    <h4>Teacher Post</h4>


                </div>
            </div>
            <div class="row">
                @foreach ($tuitionposts as $tpost)
                    {{-- <a href="{{route('s_t.post.singleview',$tpost->id)}}"> --}}
                    <div class="col-lg-4 mb-4 mb-lg-0 ">
                        <div class="testimonial-2 mb-4">

                            {{-- <h3 class="h5">Tuition!</h3> --}}
                            @if ($tpost->role == 'student')
                                <h3 class="h5">Need tutor !</h3>
                            @else
                                <h3 class="h5">Need Tuition</h3>
                            @endif

                            <div class="d-flex v-card align-items-center">
                                <img src="{{ url('/uploads/' . $tpost->image) }}" alt="img"
                                    style="width: 80px; height: 80px; object-fit: cover;  object-position: top; border: 1px solid rgb(172, 169, 169); border-radius:60%; color:black;">
                            </div>
                            <h6>Name: {{ $tpost->name }}</h6>
                            <h6>Role: {{ $tpost->role }}</h6>
                            {{-- <h6>Email Address: {{ $tpost->email }}</h6> --}}
                            <h6>Address: {{ $tpost->address }}</h6>
                            <h6>Class: {{ $tpost->class_list }}</h6>
                            <h6>Subject: {{ $tpost->subject_name }}</h6>
                            {{-- <h6>Salary: {{ $tpost->salary }} .BDT</h6> --}}
                            {{-- <h6>Contact: {{ $tpost->contact }}</h6> --}}
                            <a class="btn btn-primary" href="{{ route('s_t.post.singleview', $tpost->id) }}"
                                role="button">See More</a>

                            {{-- <blockquote class="mb-4">
                            <p>Class: {{$tpost->class_lits}}</p>
                            </blockquote> --}}



                        </div>
                    </div>
                    {{-- </a> --}}
                @endforeach
            </div>
        @endif


        @if (optional(auth('member')->user())->role == 'teacher')
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center mb-5">
                    <h4>Student Post</h4>
                </div>
            </div>

            {{-- Student Post --}}
            <div class="row">
                @foreach ($studentposts as $spost)
                    {{-- <a href="{{route('s_t.post.singleview',$spost->id)}}"> --}}
                    <div class="col-lg-4 mb-4 mb-lg-0 ">
                        <div class="testimonial-2 mb-3">

                            {{-- <h3 class="h5">Tuition !</h3> --}}
                            @if ($spost->role == 'student')
                                <h3 class="h5">Need tuitor !</h3>
                            @else
                                <h3 class="h5">Need Tuition</h3>
                            @endif

                            <div class="d-flex v-card align-items-center">
                                <img src="{{ url('/uploads/' . $spost->image) }}" alt="img"
                                    style="width: 80px; height: 80px; object-fit: cover; 0bject-position:top; border: 1px solid rgb(172, 169, 169); border-radius:60%; color:rgb(0, 0, 0);">
                            </div>
                            <h6>Name: {{ $spost->name }}</h6>
                            <h6>Role: {{ $spost->role }}</h6>
                            {{-- <h6>Email Address: {{ $spost->email }}</h6> --}}
                            <h6>Address: {{ $spost->address }}</h6>
                            <h6>Class: {{ $spost->class_list }}</h6>
                            <h6>Subject: {{ $spost->subject_name }}</h6>
                            {{-- <h6>Salary: {{ $spost->salary }} .BDT</h6> --}}
                            {{-- <h6>Contact: {{ $spost->contact }}</h6> --}}
                            <a class="btn btn-primary" href="{{ route('s_t.post.singleview', $spost->id) }}"
                                role="button">See More</a>

                            {{-- <blockquote class="mb-4">
                                <p>Class: {{$tpost->class_lits}}</p>
                                </blockquote> --}}



                        </div>
                    </div>
                    {{-- </a> --}}
                @endforeach
            </div>
        @endif

        <!-- end cart -->






    </div>
@endsection
