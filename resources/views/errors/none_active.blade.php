<h2>Xin chao,
@if(Auth::check())
	{{Auth::user()->name}}
@else
	ban
@endif
</h2>

<b>Tai khoan chua duoc kich hoat</b>
<br>
<a href="{{route('trangchu')}}">Quay ve trang chu</a>
<a href="{{route('logout')}}">Dang nhap lai</a>

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
                <div class="text-error"><span class="ion-sad"></span></div><br>
                <h3 class="text-uppercase text-white font-600">Account Non Actived</h3>
                <p class="text-white m-t-30">
                   Hello @if(Auth::check())
							{{Auth::user()->name}}
						@else
							@php
								return redirect()->route('login');
							@endphp
						@endif	
					 . The account has not been activated. Resend email active account.
                </p>
                <br>
                <a class="btn btn-pink waves-effect waves-light" href="{{route('trangchu')}}"> Return Home</a>
                <a class="btn btn-pink waves-effect waves-light" href="{{route('resend-mail-active')}}"> Resend Email Active</a>

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