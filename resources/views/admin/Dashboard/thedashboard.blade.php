@extends('admin.master')

@section('content')
<div class="container">
    <div class="row">

        <!-- to count the number of  student -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                No of Student</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $countStudent->count() }}</div>
                        </div>
                        <div class="col-auto">
                            
                            <i class="fas fa-chalkboard-user fa-2x text-gray-500"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- cont the number  of  teacher -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                No of Teacher</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$countTeacher->count()}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-user-graduate fa-2x text-gray-500"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- cont the number  of  subject -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total No of Subject</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$countSubject->count()}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-book fa-2x text-gray-500"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- count the number of class --}}
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total No of Class</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$countClass->count()}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-chalkboard fa-2x text-gray-500"></i></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="position: relative; width:100%; height: 370px;">
        <img src="{{ url('/dashboardpic/image_set1.jpg') }}" alt="img" style="width: 100%; height: 100%; object-fit: cover;">
        {{-- <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: white; font-size: 45px; font-weight: bold;">
            Home Tutor Management System
        </div> --}}
        

    </div>
    
</div>    

@endsection