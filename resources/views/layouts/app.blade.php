<!DOCTYPE html>
<html lang="en">
    <!-- BEGIN HEAD -->
    <head>
        @include('layouts/head');
    </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
        <!-- BEGIN HEADER -->
        @include('layouts/header')
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->

        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-content-wrapper">
            <!-- BEGIN SIDEBAR -->
            @include('layouts/sidebar')
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->

                    <!-- END THEME PANEL -->
                    <h1 class="page-title"> Dashboard 2
                        <small>dashboard & statistics</small>
                    </h1>
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="{!! url('/') !!}">Home</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <span>@yield('page_name')</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE HEADER-->
                       @include('flash::message')
                       @if(Session::has('error-message'))
                       <div class="alert alert-danger alert-dismissable">
                           <a href="#" class="close" data-dismiss="alert" aria-label="close"><span><strong>X</strong></span></a>
                            <strong>Error!</strong> {{Session::get('error-message')}}.
                       </div>
                       @endif
                       @yield('content')
                    
                </div>
            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
        <!-- BEGIN QUICK SIDEBAR -->
        @include('layouts/quick_sidebar')
        <!-- END QUICK SIDEBAR -->
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        @include('layouts/footer')

    </body>

</html>