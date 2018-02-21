<!-- Navigation Bar-->
<header id="topnav">
    <div class="topbar-main">
        <div class="container">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="{{route('dashbroad')}}" class="logo">
                    <i class="zmdi zmdi-group-work icon-c-logo"></i>
                    <span>Uplon</span>
                </a>
            </div>
            <!-- End Logo container-->


            <div class="menu-extras navbar-topbar">

                <ul class="list-inline float-right mb-0">

                    <li class="list-inline-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>

                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <i class="zmdi zmdi-notifications-none noti-icon"></i>
                            <span class="noti-icon-badge"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5><small><span class="label label-danger float-right">7</span>Notification</small></h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-success"><i class="icon-bubble"></i></div>
                                <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1min ago</small></p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info"><i class="icon-user"></i></div>
                                <p class="notify-details">New user registered.<small class="text-muted">1min ago</small></p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-danger"><i class="icon-like"></i></div>
                                <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1min ago</small></p>
                            </a>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                View All
                            </a>

                        </div>
                    </li>

                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <i class="zmdi zmdi-email noti-icon"></i>
                            <span class="noti-icon-badge"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg" aria-labelledby="Preview">
                            <!-- item-->
                            <div class="dropdown-item noti-title bg-success">
                                <h5><small><span class="label label-danger float-right">7</span>Messages</small></h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-faded">
                                    <img src="{{asset('assets_admin/images/users/avatar-2.jpg')}}" alt="img" class="rounded-circle img-fluid">
                                </div>
                                <p class="notify-details">
                                    <b>Robert Taylor</b>
                                    <span>New tasks needs to be done</span>
                                    <small class="text-muted">1min ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-faded waves-effect waves-light">
                                    <img src="{{asset('assets_admin/images/users/avatar-3.jpg')}}" alt="img" class="rounded-circle img-fluid">
                                </div>
                                <p class="notify-details">
                                    <b>Carlos Crouch</b>
                                    <span>New tasks needs to be done</span>
                                    <small class="text-muted">1min ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-faded">
                                    <img src="{{asset('assets_admin/images/users/avatar-4.jpg')}}" alt="img" class="rounded-circle img-fluid">
                                </div>
                                <p class="notify-details">
                                    <b>Robert Taylor</b>
                                    <span>New tasks needs to be done</span>
                                    <small class="text-muted">1min ago</small>
                                </p>
                            </a>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                View All
                            </a>

                        </div>
                    </li>

                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link waves-effect waves-light right-bar-toggle" href="javascript:void(0);">
                            <i class="zmdi zmdi-format-subject noti-icon"></i>
                        </a>
                    </li>

                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle  nav-user" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <img src="{{asset('assets_admin/images/users/avatar-1.jpg')}}" alt="user" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="text-overflow"><small>Welcome ! John</small> </h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="zmdi zmdi-account-circle"></i> <span>Profile</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="zmdi zmdi-settings"></i> <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="zmdi zmdi-lock-open"></i> <span>Lock Screen</span>
                            </a>

                            <!-- item-->
                            <a href="{{route('logout')}}" class="dropdown-item notify-item">
                                <i class="zmdi zmdi-power"></i> <span>Logout</span>
                            </a>

                        </div>
                    </li>

                </ul>

            </div> <!-- end menu-extras -->
            <div class="clearfix"></div>

        </div> <!-- end container -->
    </div>
    <!-- end topbar-main -->


    <div class="navbar-custom">
        <div class="container">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li>
                        <a href="{{route('dashbroad')}}"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span> </a>
                    </li>
                    <li class="has-submenu">
                        <a href="#"><i class="zmdi zmdi-format-underlined"></i> <span> Products </span> </a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li><a href="{{route('productlist')}}">Products List</a></li>
                                    <li><a href="{{route('addproduct')}}">Add</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="zmdi zmdi-album"></i> <span> Category </span> </a>
                        <ul class="submenu">
                            <li><a href="{{route('catelist')}}">Category List</a></li>
                            <li><a href="{{route('addcate')}}">Add</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="zmdi zmdi-collection-text"></i><span> Posts </span> </a>
                        <ul class="submenu">
                            <li><a href="{{route('postlist')}}">Posts List</a></li>
                            <li><a href="{{Route('addpost')}}">Add</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#"><i class="zmdi zmdi-collection-text"></i><span> Users </span> </a>
                        <ul class="submenu">
                            <li><a href="form-elements.php">Users List</a></li>
                            <li><a href="form-advanced.php">Add</a></li>
                        </ul>
                    </li>
                   <!--  <li class="has-submenu">
                        <a href="#"><i class="zmdi zmdi-collection-item"></i> <span> Pages </span> </a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li><a href="calendar.php">Calendar</a></li>
                                    <li><a href="pages-starter.php">Starter Page</a></li>
                                    <li><a href="pages-login.php">Login</a></li>
                                    <li><a href="pages-register.php">Register</a></li>
                                    <li><a href="pages-recoverpw.php">Recover Password</a></li>
                                    <li><a href="pages-lock-screen.php">Lock Screen</a></li>
                                    <li><a href="pages-404.php">Error 404</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li><a href="pages-500.php">Error 500</a></li>
                                    <li><a href="pages-timeline.php">Timeline</a></li>
                                    <li><a href="pages-invoice.php">Invoice</a></li>
                                    <li><a href="pages-pricing.php">Pricing</a></li>
                                    <li><a href="pages-gallery.php">Gallery</a></li>
                                    <li><a href="pages-maintenance.php">Maintenance</a></li>
                                    <li><a href="pages-comingsoon.php">Coming Soon</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> -->

                </ul>
                <!-- End navigation menu  -->
            </div>
        </div>
    </div>
</header>
<!-- End Navigation Bar-->


<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->

<div class="wrapper">
    <div class="container">
