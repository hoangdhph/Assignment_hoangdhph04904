<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="{{asset('assets_admin/images/favicon.ico')}}">

        <!-- App title -->
        <title>Uplon - Responsive Admin Dashboard Template</title>

        <!-- Bootstrap CSS -->
        <link href="{{asset('assets_admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- App CSS -->
        <link href="{{asset('assets_admin/css/style.css')}}" rel="stylesheet" type="text/css" />

        <!-- Modernizr js -->
        <script src="{{asset('assets_admin/js/modernizr.min.js')}}"></script>

    </head>


    <body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">

        	<div class="account-bg">
                <div class="card-box mb-0">
                    <div class="text-center m-t-20">
                        <a href="index.html" class="logo">
                            <i class="zmdi zmdi-group-work icon-c-logo"></i>
                            <span>Uplon</span>
                        </a>
                    </div>
                    <div class="m-t-10 p-20">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h6 class="text-muted text-uppercase mb-0 m-t-0">Account Active</h6>
                                <p class="text-muted m-b-0 font-13 m-t-20">Account has been activated.  </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end card-box-->

            <div class="m-t-20">
                <div class="text-center">
                    <p class="text-white">Return to<a href="{{route('login')}}" class="text-white m-l-5"><b>Sign In</b></p>
                </div>
            </div>

        </div>
        <!-- end wrapper page -->


        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{asset('assets_admin/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets_admin/js/popper.min.js')}}"></script><!-- Tether for Bootstrap -->
        <script src="{{asset('assets_admin/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets_admin/js/detect.js')}}"></script>
        <script src="{{asset('assets_admin/js/waves.js')}}"></script>
        <script src="{{asset('assets_admin/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('assets_admin/plugins/switchery/switchery.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets_admin/js/jquery.core.js')}}"></script>
        <script src="{{asset('assets_admin/js/jquery.app.js')}}"></script>

    </body>
</html>