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

        	<div class="ex-page-content text-center">
                <div class="text-error">4<span class="ion-sad"></span>4</div>
                <h3 class="text-uppercase text-white font-600">Page not Found</h3>
                <p class="text-white m-t-30">
                    It's looking like you may have taken a wrong turn. Don't worry... it happens to
                    the best of us. You might want to check your internet connection. Here's a little tip that might
                    help you get back on track.
                </p>
                <br>
                <a class="btn btn-pink waves-effect waves-light" href="{{route('dashbroad')}}"> Return Home</a>

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