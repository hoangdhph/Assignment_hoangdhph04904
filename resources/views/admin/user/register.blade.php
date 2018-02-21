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
                                <h6 class="text-muted text-uppercase m-b-0 m-t-0">Register</h6>
                            </div>
                        </div>
                        <form class="m-t-20" action="{{route('save-register')}}" method="post" data-parsley-validate novalidate>
                            {{csrf_field()}}
                            @if(isset($msg))
                                <div class="alert alert-danger">
                                    <strong>Danger!</strong> {{$msg}}
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="userName">User Name<span class="text-danger">*</span></label>
                                    <input type="text" name="username" parsley-trigger="change" required
                                           placeholder="Enter user name" class="form-control" id="userName" >
                                </div>
                                <div class="form-group">
                                    <label for="emailAddress">Email address<span class="text-danger">*</span></label>
                                    <input type="email" name="email" parsley-trigger="change" required
                                           placeholder="Enter email" class="form-control" id="emailAddress">
                                </div>
                                <div class="form-group">
                                    <label for="pass1">Password<span class="text-danger">*</span></label>
                                    <input id="pass1" type="password" placeholder="Password" required
                                           class="form-control" name="password">
                                </div>
                                <div class="form-group">
                                    <label for="passWord2">Confirm Password <span class="text-danger">*</span></label>
                                    <input data-parsley-equalto="#pass1" type="password" required
                                           placeholder="Password" class="form-control" id="passWord2" name="repassword">
                                </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox-signup" type="checkbox" checked="checked">
                                        <label for="checkbox-signup">I accept <a href="#">Terms and Conditions</a></label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row text-center m-t-10">
                                <div class="col-12">
                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Register Now</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <!-- end card-box-->

            <div class="m-t-20">
                <div class="text-center">
                    <p class="text-white">Already have account? <a href="{{route('login')}}" class="text-white m-l-5"><b>Sign In</b> </a></p>
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


        <!-- Validation js (Parsleyjs) -->
        <script type="text/javascript" src="{{asset('assets_admin/plugins/parsleyjs/parsley.min.js')}}"></script>

        
        <script type="text/javascript">
            $(document).ready(function() {
                $('form').parsley();
            });
        </script>

    </body>
</html>