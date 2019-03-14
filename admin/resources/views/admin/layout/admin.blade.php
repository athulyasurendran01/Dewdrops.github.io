<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Admin Area</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('admin/images/favicon.ico')}}">

        <!-- App css -->
        <link href="{{ asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/css/metismenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/css/style.css')}}" rel="stylesheet" type="text/css" />

        <script src="{{ asset('admin/js/modernizr.min.js')}}"></script>
         @yield('cssfiles' ,'')

    </head>


    


    
    
       <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">

                @include('admin.layout.includes.sidenav')

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Top Bar Start -->
                @include('admin.layout.includes.header')
               
                <!-- Top Bar End -->

                @if(Session::has('message'))
                    <div class="alert alert-info">
                        <p>{{ Session::get('message') }}</p>
                    </div>
                @endif

                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">
                        @yield('content')

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    {!! date('Y') !!} © webfluid.in
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->
        
        
        <!-- jQuery  -->
        <script src="{{ asset('admin/js/jquery.min.js')}}"></script>
        <script src="{{ asset('admin/js/popper.min.js')}}"></script>
        <script src="{{ asset('admin/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('admin/js/metisMenu.min.js')}}"></script>
        <script src="{{ asset('admin/js/waves.js')}}"></script>
        <script src="{{ asset('admin/js/jquery.slimscroll.js')}}"></script>

       

        <!-- Dashboard Init
        <script src="{{ asset('admin/pages/jquery.dashboard.init.js')}}"></script>
 -->
        <!-- App js -->
        <script src="{{ asset('admin/js/jquery.core.js')}}"></script>
        <script src="{{ asset('admin/js/jquery.app.js')}}"></script>
        
        @yield('jsfiles' ,'')

    
</html>
