
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="https://startbootstrap.github.io/startbootstrap-sb-admin-2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="https://startbootstrap.github.io/startbootstrap-sb-admin-2/css/sb-admin-2.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    @notifyCss
    <style>
        .notify{
            z-index: 1000000;
        }
    </style>
</head>

<body id="page-top">
<x-notify::notify />

         <!-- Page Wrapper -->    
    <div id="wrapper">
        

            <!-- End of Sidebar -->
             @include('admin.partial.sidebar')
             <!-- End of Sidebar -->

        

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">




                    <!-- nav bar -->
                    <!-- Topbar -->
                    @include('admin.partial.navbar')
                    <!--end of the  Topbar -->

                    
                 <!-- content of the page -->
                 
                    @yield('content')
                    
                 


                </div>
            
        </div>
        <!-- End of Content Wrapper -->

         <!-- </div> -->

    
    </div>
    {{-- this script for report generate --}}
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/vendor/jquery/jquery.min.js"></script>
    <script src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/vendor/chart.js/Chart.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/js/demo/chart-area-demo.js"></script>
    <script src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/js/demo/chart-pie-demo.js"></script>
    @notifyJs

    {{-- @stack('yourJsCode') is for report generate --}}
    @stack('yourJsCode')
</body>

</html>