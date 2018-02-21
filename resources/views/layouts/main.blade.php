<!doctype html>
<html class="no-js" lang="en">
    
<!-- Mirrored from www.themezaa.com/html/h-code/home-blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jan 2018 16:48:35 GMT -->
<head>
        <title>@yield('title')</title>
        <meta name="description" content="H-Code - A premium portfolio template from ThemeZaa">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <!-- favicon -->
        <link rel="shortcut icon" href="{{asset('images/favicon.png')}}">
        <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/apple-touch-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/apple-touch-icon-114x114.png')}}">
        
        @include('layouts._share.css')

    </head>
    <body>
        <!-- navigation panel -->
        @include('layouts.header')
        <!-- end navigation panel --> 
        
        @yield('content')

        <!-- footer -->
        @include('layouts.footer')
        <!-- end footer -->
    </body>

    @include('layouts._share.js')
<!-- Mirrored from www.themezaa.com/html/h-code/home-blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jan 2018 16:50:47 GMT -->
</html>
