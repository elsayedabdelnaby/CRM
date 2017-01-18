<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>The-King | User Reset Password</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{!! url('assets') !!}/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="{!! url('assets') !!}/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{!! url('assets') !!}/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{!! url('assets') !!}/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{!! url('assets') !!}/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{!! url('assets') !!}/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="{!! url('assets') !!}/pages/css/lock.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> 
    </head>
    <!-- END HEAD -->

    <body class="">
        <div class="page-lock">
            <div class="page-logo">
                <a class="brand" href="index.php">
                    <img src="{!! url('assets') !!}/pages/img/logo-big.png" alt="logo" /> </a>
            </div>
            <div class="page-body">
                <div class="lock-head"> Reset Password </div>
                <div class="lock-body">
                    <form class="lock-form pull-left" action="{{ url('/password/email') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                        <input class="form-control placeholder-no-fix" type="email" autocomplete="off" placeholder="E-Mail Address" name="email" value="{{ old('email') }}" required/> </div>
                        <div class="form-actions">
                            <button type="submit" class="btn red uppercase">Send Password Reset Link </button>
                        </div>
                    </form>
                </div>
                <div class="lock-bottom">
                    
                </div>
            </div>
            <div class="page-footer-custom"> 2014 &copy; The-King. Admin Dashboard Template. </div>
        </div>
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="{!! url('assets') !!}/js/jquery.min.js" type="text/javascript"></script>
        <script src="{!! url('assets') !!}/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="{!! url('assets') !!}/js/js.cookie.min.js" type="text/javascript"></script>
        <script src="{!! url('assets') !!}/js/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="{!! url('assets') !!}/js/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="{!! url('assets') !!}/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{!! url('assets') !!}/js/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{!! url('assets') !!}/pages/scripts/lock.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>
