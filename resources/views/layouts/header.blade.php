        <!-- navigation panel -->
        <nav class="navbar navbar-default navbar-fixed-top nav-transparent overlay-nav sticky-nav static-sticky bg-white" role="navigation">
            <div class="container">
                <div class="row">
                    <!-- logo -->
                    <div class="col-md-2 pull-left"><a class="logo-light" href="index.html"><img alt="" src="images/logo-light.png" class="logo" /></a></div>
                    <!-- end logo -->
                    <!-- search and cart  -->
                    <div class="col-md-2 no-padding-left search-cart-header pull-right">
                        <div id="top-search">
                            <!-- nav search -->
                            <a href="#search-header" class="header-search-form"><i class="fa fa-search search-button"></i></a>
                            <!-- end nav search -->
                        </div>
                        <!-- search input-->
                        <form id="search-header" method="get" action="{{route('client.search')}}" name="search-header" class="mfp-hide search-form-result">
                            <div class="search-form position-relative">
                                <button type="submit" class="fa fa-search close-search search-button"></button>
                                <input type="text" name="keyword" class="search-input" placeholder="Enter your keywords..." autocomplete="off">
                            </div>
                        </form>
                        <!-- end search input -->
                        <div class="top-cart">
                            <!-- nav shopping bag -->
                            <a href="#" class="shopping-cart">
                                <i class="fa fa-shopping-cart"></i>
                                <div class="subtitle">(1) Items</div>
                            </a>
                            <!-- end nav shopping bag -->
                            <!-- shopping bag content -->
                            <div class="cart-content">
                                <ul class="cart-list">
                                    <li>
                                        <a title="Remove item" class="remove" href="#">×</a>
                                        <a href="#">
                                            <img width="90" height="90" alt="" src="images/shop-cart.jpg">Leather Craft
                                        </a>
                                        <span class="quantity">1 × <span class="amount">$160</span></span>
                                        <a href="#">Edit</a>
                                    </li>
                                </ul>
                                <p class="total">Subtotal: <span class="amount">$160</span></p>
                                <p class="buttons">
                                    <a href="shop-cart.html" class="btn btn-very-small-white no-margin-bottom margin-seven pull-left no-margin-lr">View Cart</a>
                                    <a href="shop-checkout.html" class="btn btn-very-small-white no-margin-bottom margin-seven no-margin-right pull-right">Checkout</a>
                                </p>
                            </div>
                            <!-- end shopping bag content -->
                        </div>
                    </div>
                    <!-- end search and cart  -->
                    <!-- toggle navigation -->
                    <div class="navbar-header col-sm-8 col-xs-2 pull-right">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    </div>
                    <!-- toggle navigation end -->
                    <!-- main menu -->
                    <div class="col-md-8 no-padding-right accordion-menu text-right">
                        <div class="navbar-collapse collapse">
                            <ul id="accordion" class="nav navbar-nav navbar-right panel-group">
                                <!-- menu item -->
                                <li class="dropdown panel">
                                    <a href="{{route('trangchu')}}">Trang chủ <i class="fa fa-angle-down"></i></a>
                                </li>
                                <!-- end menu item -->
                                <!-- menu item -->
                                <li class="dropdown panel">
                                    <a href="{{route('blog')}}">Blog <i class="fa fa-angle-down"></i></a>
                                </li>
                                <!-- end menu item -->
                                <!-- menu item -->
                                <li class="dropdown panel simple-dropdown">
                                    <a href="{{route('cuahang')}}">Cửa hàng <i class="fa fa-angle-down"></i></a>
                                </li>
                                <!-- end menu item -->
                                 <!-- menu item -->
                                <li class="dropdown panel simple-dropdown">
                                    <a href="{{route('gioithieu')}}">Giới thiệu <i class="fa fa-angle-down"></i></a>
                                </li>
                                <!-- end menu item -->
                            </ul>
                        </div>
                    </div>
                    <!-- end main menu -->
                </div>
            </div>
        </nav>
        <!-- end navigation panel --> 