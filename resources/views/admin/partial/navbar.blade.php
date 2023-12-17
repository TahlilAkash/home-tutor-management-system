<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Topbar Search -->
    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search ">
        
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary bg-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow list-unstyled">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline font-weight-bold">Admin Profile</span>
                <img class="img-profile rounded-circle"
                    src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/img/undraw_profile.svg">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                
                <a class="dropdown-item " href="{{route('admin.logout')}}">{{auth()->user()->name}}
                <i class="fa-solid fa-right-from-bracket mr-2 text-gray-400"></i>
                    Logout
                </a>
                
                <!-- <div class="dropdown-divider"></div>
                
                <a class="dropdown-item" href="{{route('admin.logout')}}"> Logout</a>  -->
            </div>
    </li>

        

</nav>