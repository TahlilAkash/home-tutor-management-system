<!-- Sidebar -->
<ul class="navbar-nav  bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>
            
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('admin.dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('student.list')}}">
                    <i class="fa-solid fa-chalkboard-user"></i>
                    <span>Students Post List</span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="{{route('teacher.list')}}">
                    <i class="fa-solid fa-user-graduate"></i>
                    <span>Teachers Post List</span></a>
            </li>
  
            {{-- <li class="nav-item">
                <a class="collapse-item" href="{{route('student.list')}}"></a>
                    <i class="fa-solid fa-chalkboard-user"></i>
                    <span>Student</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Students Activities:</h6>
                        <a class="collapse-item" href="{{route('student.list')}}">Student List</a>
                        <a class="collapse-item" href="{{route('student.post')}}">Students Advertisement</a>
                    </div>
                </div>
            </li> --}}

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Management
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('subject.list')}}">
                    <i class="fa-solid fa-book"></i>
                    <span>Subject</span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="{{route('class.list')}}">
                <i class="fa-solid fa-chalkboard"></i>
                    <span>Class</span></a>
            </li>


            {{-- <li class="nav-item">
                <a class="nav-link" href="{{route('institute.list')}}">
                    <i class="fa-solid fa-school"></i>
                    <span>Institute</span></a>
            </li> --}}

            

            {{-- <li class="nav-item">
                <a class="nav-link" href="{{route('tuition.list')}}">
                    <i class="fa-solid fa-circle-info"></i>
                    <span>Tuition Type</span></a>
            </li> --}}



            <!-- Nav Item - Tables -->
        

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item">
                <a class="nav-link" href="{{route('user.list')}}">
                    <i class="fa-solid fa-user"></i>    
                    <span>Member</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#collapseTwo">
                    <i class="fas fa-money-check-alt"></i>
                    <span>Payment Report </span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('student.payment.list')}}">Student Payment Report</a>
                        <a class="collapse-item" href="{{route('teacher.payment.list')}}">Teacher Payment Report</a>
                    </div>
                </div>
            </li>
            
            
</ul>

