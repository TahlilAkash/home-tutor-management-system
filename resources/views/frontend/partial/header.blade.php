<header class="site-navbar mb-5" style="position: fixed; background-color: white; height:5rem; padding-bottom:72px">
    <div class="container">
        <div class="row align-items-center position-relative">
            <div class="col-3">
                <div class="site-logo">
                    <strong>HTMS</strong>
                </div>
            </div>

            <div style="position: absolute; margin-left: 130px; z-index:30">
                @if (auth('member')->check())
                    <form action="{{ route('subject.search') }}" method="get">
                        <input type="text" class="form-control mt-1" style="width: 200px; display: inline-block;"
                            placeholder="Search by subject.." name="search">
                        <button type="submit" class="btn btn-success"
                            style="border: 2px solid green; background-color: green; color: white;">Search</button>
                    </form>
                @endif
            </div>

            <div class="col-9 text-right">
                <span class="d-inline-block d-lg-none "><a href="#"
                        class=" site-menu-toggle js-menu-toggle py-5 "><span
                            class="icon-menu h3 text-black"></span></a></span>
                <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">

                    <ul class="site-menu main-menu js-clone-nav ml-auto ">
                        <li><a href="{{ route('home') }}" class="nav-link " style="font-weight: bold;">Home</a></li>

                        <li><a href="" class="nav-link" style="font-weight: bold;">About</a></li>

                        {{-- Buy premium --}}
                        {{-- @if (auth('member')->user())
                
                
                                            <li><a href="">{{auth('member')->user()->name }} | {{auth('member')->user()->role}}</a></li>
                                            <li> <a href="{{route('profile.view')}}" class="nav-link">My Profile</a></li>
                                                
                                            @php
                                                $tutionPostCount = \App\Models\TuitionPost::where('user_id', auth('member')->user()->id)->count();
                                            @endphp
                                        
                                            @if ($tutionPostCount < 3)
                                                        @if (auth('member')->user()->role == 'teacher')
                                                            <li><a href="{{ route('teacher.create.tuition.post') }}" class="nav-link">Create Tuition</a></li>
                                                        @else
                                                            <li><a href="{{ route('student.create.tuition.post') }}" class="nav-link">Need Tutor</a></li>
                                                        @endif 
                                                @else   
                                                    <li><a href="{{route('buyPremium.post')}}" class="nav-link">Buy Premium</a></li>
                                                    
                                            @endif
                                            
                                            <li><a href="{{route('member.logout')}}" class="nav-link">Log Out</a></li>
                                        @else
                                        
                                        <li><a href="{{route('member.login')}}" class="nav-link">Login</a></li>
                                        <li><a href="{{route('member.registration')}}" class="nav-link">Registration</a></li>
                                @endif --}}
                        {{--  --}}
                        @if (auth('member')->user())
                            <li style="font-weight: bold;">{{ auth('member')->user()->name }} |
                                {{ auth('member')->user()->role }}</li>
                            <li><a href="{{ route('profile.view') }}" class="nav-link" style="font-weight: bold;">My
                                    Profile</a></li>

                            @php
                                $tutionPostCount = \App\Models\TuitionPost::where('user_id', auth('member')->user()->id)->count();
                                @endphp


                            @if (auth('member')->user()->status == 'confirm' && (($tutionPostCount-3)/3)< auth('member')->user()->payment_count)
                                {{-- Show create post links based on the user's role --}}
                                @if (auth('member')->user()->role == 'teacher')
                                    <li><a href="{{ route('teacher.create.tuition.post') }}" class="nav-link"
                                            style="font-weight: bold;">Create Tuition</a></li>
                                @else
                                    <li><a href="{{ route('student.create.tuition.post') }}" class="nav-link"
                                            style="font-weight: bold;">Need Tutor</a></li>
                                @endif
                            @else
                                {{-- Check the number of tuition posts --}}
                                @if ($tutionPostCount < 3)
                                    {{-- Show create post links based on the user's role --}}
                                    @if (auth('member')->user()->role == 'teacher')
                                        <li><a href="{{ route('teacher.create.tuition.post') }}" class="nav-link"
                                                style="font-weight: bold;">Create Tuition</a></li>
                                    @else
                                        <li><a href="{{ route('student.create.tuition.post') }}" class="nav-link"
                                                style="font-weight: bold;">Need Tutor</a></li>
                                    @endif
                                @else
                                    {{-- Show "Buy Premium" link --}}
                                    <li><a href="{{ route('buyPremium.post') }}" class="nav-link"
                                            style="font-weight: bold;">Buy Premium</a></li>
                                @endif
                            @endif

                            <li><a href="{{ route('member.logout') }}" class="nav-link" style="font-weight: bold;">Log
                                    Out</a></li>
                        @else
                            <li><a href="{{ route('member.login') }}" class="nav-link"
                                    style="font-weight: bold;">Login</a></li>
                            <li><a href="{{ route('member.registration') }}" class="nav-link"
                                    style="font-weight: bold;">Registration</a></li>
                        @endif


                        {{-- <li><a href="{{route('myPost',id)}}" class="nav-link">My Post</a></li> --}}

                        {{-- <li><a href="" class="nav-link">Contact</a></li> --}}
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</header>


<!-- <div class="site-section-cover overlay h-25" style="background-color:#303030; height:50%">
    <div class="container">
        <div class="row align-items-center justify-content-center" >
            <div class="col-lg-10 text-center">
                <h1>Home <strong>Tutor</strong> Management<strong> System</strong></h1>
            </div>
        </div>
    </div>
</div> -->
