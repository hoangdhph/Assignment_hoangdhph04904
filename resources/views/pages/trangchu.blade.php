@extends('layouts.main')

@section('content')
        <section id="slider" class="no-padding content-top-margin"> 
            <!-- slider -->
            <div id="owl-demo" class="owl-carousel owl-theme owl-half-slider dark-pagination dark-pagination-without-next-prev-arrow">
                <!-- slider item -->
                <div class="item owl-bg-img" style="background-image:url('images/slider-img38.jpg');">
                    <div class="container position-relative">
                        <div class="slider-typography slider-typography-shop text-left">
                            <div class="slider-text-middle-main">
                                <div class="slider-text-middle padding-left-right-px animated fadeInUp">
                                    <span class="owl-subtitle black-text">Season 2015</span>
                                    <span class="owl-title black-text xs-margin-bottom-seven">Shopping With Style</span>
                                    <a href="shop-with-sidebar.html" class="highlight-button-dark btn margin-four">Check Collection</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
                <!-- slider item -->
                <div class="item owl-bg-img" style="background-image:url('images/slider-img39.jpg');">
                    <div class="container position-relative">
                        <div class="slider-typography slider-typography-shop text-left">
                            <div class="slider-text-middle-main">
                                <div class="slider-text-middle padding-left-right-px">
                                    <span class="owl-subtitle black-text">Winter Collection</span>
                                    <span class="owl-title black-text xs-margin-bottom-seven">Incredible Spring Style</span>
                                    <a href="shop-with-sidebar.html" class="highlight-button-dark btn margin-four">Check Collection</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
                <!-- slider item -->
                <div class="item owl-bg-img" style="background-image:url('images/slider-img40.jpg');">
                    <div class="container position-relative">
                        <div class="slider-typography slider-typography-shop text-left">
                            <div class="slider-text-middle-main">
                                <div class="slider-text-middle padding-left-right-px">
                                    <span class="owl-subtitle black-text">Best Products</span>
                                    <span class="owl-title black-text xs-margin-bottom-seven">Top Notch Products</span>
                                    <a href="shop-with-sidebar.html" class="highlight-button-dark btn margin-four">Check Collection</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
            </div>
            <!-- end slider -->
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <!-- shop item -->
                        <div class="home-product text-center position-relative overflow-hidden margin-ten no-margin-top">
                            <a href="shop-single-product.html"><img src="images/product1.jpg" alt=""/></a>
                            <span class="product-name text-uppercase"><a href="shop-single-product.html">Orange Handbags</a></span>
                            <span class="price black-text">$750</span>
                            <div class="quick-buy">
                                <div class="product-share">
                                    <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Wishlist" data-wow-duration="300ms"><i class="fa fa-heart-o"></i></a>
                                    <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Compare" data-wow-duration="600ms"><i class="fa fa-refresh"></i></a>
                                    <a href="shop-cart.html" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Cart" data-wow-duration="900ms"><i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end shop item -->
                        <!-- shop item -->
                        <div class="home-product text-center position-relative overflow-hidden margin-ten no-margin-bottom">
                            <a href="shop-single-product.html"><img src="images/product2.jpg" alt=""/></a>
                            <span class="product-name text-uppercase"><a href="shop-single-product.html">Madeleine Thompson</a></span>
                            <span class="price black-text">$450</span>
                            <div class="quick-buy">
                                <div class="product-share">
                                    <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Compare"><i class="fa fa-refresh"></i></a>
                                    <a href="shop-cart.html" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end shop item -->
                    </div>
                    <div class="col-md-4 col-sm-4 exclusive-style no-padding xs-margin-top-ten">
                        <!-- shop item slider -->
                        <div id="owl-demo-small" class="owl-carousel owl-theme owl-half-slider dark-pagination dark-pagination-without-next-prev-arrow">
                            <div class="item text-center"><a href="shop-single-product.html"><img src="images/product5.jpg" alt=""/></a></div> 
                            <div class="item text-center"><a href="shop-single-product.html"><img src="images/product8.jpg" alt=""/></a></div> 
                            <div class="item text-center"><a href="shop-single-product.html"><img src="images/product6.jpg" alt=""/></a></div> 
                            <div class="item text-center"><a href="shop-single-product.html"><img src="images/product7.jpg" alt=""/></a></div> 
                        </div>
                        <!-- end shop item -->
                        <div class="exclusive-style-text text-center">
                            <p class="text-med font-weight-600 black-text text-uppercase letter-spacing-2">What To Buy Now</p>
                            <p class="sm-display-none">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text.</p>
                            <a class="highlight-button-dark btn btn-small no-margin-right no-margin-bottom margin-three" href="#">Discover all looks</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <!-- shop item -->
                        <div class="home-product text-center position-relative overflow-hidden margin-ten no-margin-top">
                            <a href="shop-single-product.html"><img src="images/product17.jpg" alt=""/></a>
                            <span class="product-name text-uppercase"><a href="shop-single-product.html">Isabel Marant</a></span>
                            <span class="price black-text">$299</span>
                            <div class="quick-buy">
                                <div class="product-share">
                                    <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Compare"><i class="fa fa-refresh"></i></a>
                                    <a href="shop-cart.html" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end shop item -->
                        <!-- shop item -->
                        <div class="home-product text-center position-relative overflow-hidden margin-ten no-margin-bottom">
                            <a href="shop-single-product.html"><img src="images/product3.jpg" alt=""/></a>
                            <span class="product-name text-uppercase"><a href="shop-single-product.html">Burberry London</a></span>
                            <span class="price black-text">$350</span>
                            <div class="quick-buy">
                                <div class="product-share">
                                    <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Compare"><i class="fa fa-refresh"></i></a>
                                    <a href="shop-cart.html" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end shop item -->
                    </div>
                </div>
            </div>
        </section>

        <section class="no-padding">
            <div class="container-fluid bg-dark-gray">
                <div class="row">
                    <!-- banner -->
                    <div class="col-md-4 col-sm-12 no-padding"><a href="shop-with-sidebar.html"><img src="images/banner3.jpg" alt=""/></a></div>
                    <!-- end banner -->
                    <!-- newsletter -->
                    <div class="col-md-4 col-sm-12 shop-newsletter-main">
                        <div class="shop-newsletter text-center">
                            <i class="icon-envelope medium-icon white-text margin-five no-margin-top"></i>
                            <p class="text-med text-uppercase letter-spacing-2 light-gray-text no-margin lg-display-block lg-margin-bottom-three">Subscribe for newsletter</p>
                            <p class="title-large font-weight-700 text-uppercase letter-spacing-2 white-text lg-display-none">Stay in touch </p>
                            <input type="text" name="name" placeholder="Enter Your Email" class="no-margin">
                            <a class="btn-small-white-background btn btn-small margin-five no-margin-right no-margin-bottom" href="#">Subscribe Now!</a>
                        </div>
                    </div>
                    <!-- end newsletter -->
                    <!-- banner -->
                    <div class="col-md-4 col-sm-12 no-padding"><a href="shop-with-sidebar.html"><img src="images/banner4.jpg" alt=""/></a></div>
                    <!-- end banner -->
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class="section-title">New arrivals this month</h3>
                    </div>
                </div>
                <div class="row">
                    <!-- shop item -->
                    <div class="col-md-4 col-sm-4">
                        <div class="home-product text-center position-relative overflow-hidden margin-ten no-margin-top">
                            <a href="shop-single-product.html"><img src="images/product9.jpg" alt=""/></a>
                            <span class="product-name text-uppercase"><a href="shop-single-product.html">Gianvito Rossi</a></span>
                            <span class="price black-text"><del>$750.00</del>$450</span>
                            <span class="onsale">Sale</span>
                            <div class="quick-buy">
                                <div class="product-share">
                                    <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Compare"><i class="fa fa-refresh"></i></a>
                                    <a href="shop-cart.html" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end shop item -->
                    <!-- shop item -->
                    <div class="col-md-4 col-sm-4">
                        <div class="home-product text-center position-relative overflow-hidden margin-ten no-margin-top">
                            <a href="shop-single-product.html"><img src="images/product10.jpg" alt=""/></a>
                            <span class="product-name text-uppercase"><a href="shop-single-product.html">Givenchy Low</a></span>
                            <span class="price black-text">$500</span>
                            <div class="quick-buy">
                                <div class="product-share">
                                    <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Compare"><i class="fa fa-refresh"></i></a>
                                    <a href="shop-cart.html" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end shop item -->
                    <!-- shop item -->
                    <div class="col-md-4 col-sm-4">
                        <div class="home-product text-center position-relative overflow-hidden margin-ten no-margin-top">
                            <a href="shop-single-product.html"><img src="images/product11.jpg" alt=""/></a>
                            <span class="product-name text-uppercase"><a href="shop-single-product.html">Alexander McQueen</a></span>
                            <span class="price black-text">$380</span>
                            <div class="quick-buy">
                                <div class="product-share">
                                    <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Compare"><i class="fa fa-refresh"></i></a>
                                    <a href="shop-cart.html" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end shop item -->
                    <!-- shop item -->
                    <div class="col-md-4 col-sm-4">
                        <div class="home-product text-center position-relative overflow-hidden margin-ten no-margin-top">
                            <a href="shop-single-product.html"><img src="images/product12.jpg" alt=""/></a>
                            <span class="product-name text-uppercase"><a href="shop-single-product.html">Richard Nicoll</a></span>
                            <span class="price black-text">$680</span>
                            <div class="quick-buy">
                                <div class="product-share">
                                    <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Compare"><i class="fa fa-refresh"></i></a>
                                    <a href="shop-cart.html" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end shop item -->
                    <!-- shop item -->
                    <div class="col-md-4 col-sm-4">
                        <div class="home-product text-center position-relative overflow-hidden margin-ten no-margin-top">
                            <a href="shop-single-product.html"><img src="images/product13.jpg" alt=""/></a>
                            <span class="product-name text-uppercase"><a href="shop-single-product.html">Roland Mouret</a></span>
                            <span class="price black-text">$980</span>
                            <div class="quick-buy">
                                <div class="product-share">
                                    <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Compare"><i class="fa fa-refresh"></i></a>
                                    <a href="shop-cart.html" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end shop item -->
                    <!-- shop item -->
                    <div class="col-md-4 col-sm-4">
                        <div class="home-product text-center position-relative overflow-hidden margin-ten no-margin-top">
                            <a href="shop-single-product.html"><img src="images/product14.jpg" alt=""/></a>
                            <span class="product-name text-uppercase"><a href="shop-single-product.html">Preen Line</a></span>
                            <span class="price black-text">$750</span>
                            <span class="new">New</span>
                            <div class="quick-buy">
                                <div class="product-share">
                                    <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Compare"><i class="fa fa-refresh"></i></a>
                                    <a href="shop-cart.html" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end shop item -->
                </div>
            </div>
        </section>

        <section class="bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class="section-title">Fashion News</h3>
                    </div>
                </div>
                <div class="row">
                    <!-- news item -->
                    <div class="col-md-4 col-sm-4 col-xs-12 blog-listing no-margin-bottom wow fadeIn xs-margin-bottom-seven" data-wow-duration="600ms">
                        <div class="blog-image"><a href="blog-single-right-sidebar.html"><img src="images/blog-post31.jpg" alt=""/></a></div>
                        <div class="blog-details">
                            <div class="blog-date">Posted by <a href="blog-masonry-2columns.html">Paul Scrivens</a> | 02 January 2015</div>
                            <div class="blog-title"><a href="blog-single-right-sidebar.html">Our latest collection review</a></div>
                            <div class="separator-line bg-black no-margin-lr no-margin-bottom"></div>
                        </div>
                    </div>
                    <!-- end news item -->
                    <!-- news item -->
                    <div class="col-md-4 col-sm-4 col-xs-12 blog-listing no-margin-bottom wow fadeIn xs-margin-bottom-seven" data-wow-duration="600ms">
                        <div class="blog-image"><a href="blog-single-right-sidebar.html"><img src="images/blog-post32.jpg" alt=""/></a></div>
                        <div class="blog-details">
                            <div class="blog-date">Posted by <a href="blog-masonry-2columns.html">Nathan Ford</a> | 01 January 2015</div>
                            <div class="blog-title"><a href="blog-single-right-sidebar.html">Winter sale so hurry up!</a></div>
                            <div class="separator-line bg-black no-margin-lr no-margin-bottom"></div>
                        </div>
                    </div>
                    <!-- end news item -->
                    <!-- news item -->
                    <div class="col-md-4 col-sm-4 col-xs-12 blog-listing no-margin-bottom wow fadeIn" data-wow-duration="600ms">
                        <div class="blog-image"><a href="blog-single-right-sidebar.html"><img src="images/blog-post33.jpg" alt=""/></a></div>
                        <div class="blog-details">
                            <div class="blog-date">Posted by <a href="blog-masonry-2columns.html">Aarron Walter</a> | 01 January 2015</div>
                            <div class="blog-title"><a href="blog-single-right-sidebar.html">Discount 20% sale so don't late</a></div>
                            <div class="separator-line bg-black no-margin-lr no-margin-bottom"></div>
                        </div>
                    </div>
                    <!-- end news item -->
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class="section-title">Featured Products</h3>
                    </div>
                </div>
                <div class="row">
                    <!-- featured products slider -->
                    <div id="shop-products" class="owl-carousel owl-theme dark-pagination owl-no-pagination owl-prev-next-simple">
                        <!-- shop item -->
                        <div class="item">
                            <div class="home-product text-center position-relative overflow-hidden">
                                <a href="shop-single-product.html"><img src="images/product12.jpg" alt=""/></a>
                                <span class="product-name text-uppercase"><a href="shop-single-product.html">Richard Nicoll</a></span>
                                <span class="price black-text">$680</span>
                                <div class="quick-buy">
                                    <div class="product-share">
                                        <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Compare"><i class="fa fa-refresh"></i></a>
                                        <a href="shop-cart.html" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end shop item -->
                        <!-- shop item -->
                        <div class="item">
                            <div class="home-product text-center position-relative overflow-hidden">
                                <a href="shop-single-product.html"><img src="images/product13.jpg" alt=""/></a>
                                <span class="product-name text-uppercase"><a href="shop-single-product.html">Roland Mouret</a></span>
                                <span class="price black-text">$980</span>
                                <div class="quick-buy">
                                    <div class="product-share">
                                        <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Compare"><i class="fa fa-refresh"></i></a>
                                        <a href="shop-cart.html" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end shop item -->
                        <!-- shop item -->
                        <div class="item">
                            <div class="home-product text-center position-relative overflow-hidden">
                                <a href="shop-single-product.html"><img src="images/product14.jpg" alt=""/></a>
                                <span class="product-name text-uppercase"><a href="shop-single-product.html">Preen Line</a></span>
                                <span class="price black-text">$750</span>
                                <div class="quick-buy">
                                    <div class="product-share">
                                        <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Compare"><i class="fa fa-refresh"></i></a>
                                        <a href="shop-cart.html" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end shop item -->
                        <!-- shop item -->
                        <div class="item">
                            <div class="home-product text-center position-relative overflow-hidden">
                                <a href="shop-single-product.html"><img src="images/product15.jpg" alt=""/></a>
                                <span class="product-name text-uppercase"><a href="shop-single-product.html">Balmain</a></span>
                                <span class="price black-text">$350</span>
                                <div class="quick-buy">
                                    <div class="product-share">
                                        <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Compare"><i class="fa fa-refresh"></i></a>
                                        <a href="shop-cart.html" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end shop item -->
                        <!-- shop item -->
                        <div class="item">
                            <div class="home-product text-center position-relative overflow-hidden">
                                <a href="shop-single-product.html"><img src="images/product16.jpg" alt=""/></a>
                                <span class="product-name text-uppercase"><a href="shop-single-product.html">Dolce & Gabbana</a></span>
                                <span class="price black-text">$700</span>
                                <div class="quick-buy">
                                    <div class="product-share">
                                        <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Compare"><i class="fa fa-refresh"></i></a>
                                        <a href="shop-cart.html" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end shop item -->
                        <!-- shop item -->
                        <div class="item">
                            <div class="home-product text-center position-relative overflow-hidden">
                                <a href="shop-single-product.html"><img src="images/product4.jpg" alt=""/></a>
                                <span class="product-name text-uppercase"><a href="shop-single-product.html">Valentino</a></span>
                                <span class="price black-text">$370</span>
                                <div class="quick-buy">
                                    <div class="product-share">
                                        <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Compare"><i class="fa fa-refresh"></i></a>
                                        <a href="shop-cart.html" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end shop item -->
                    </div>
                    <!-- end featured products slider -->
                </div>
            </div>
        </section>
        <section class="bg-gray">
            <div class="container">
                <div class="row">
                    <!-- text block -->
                    <div class="col-md-3 col-sm-6 col-xs-12 text-block text-center">
                        <div class="text-block-inner">
                            <p class="text-large text-uppercase no-margin-bottom">Men's Watches</p>
                            <p class="title-small text-uppercase font-weight-600 black-text letter-spacing-1">20% Off</p>
                            <a class="highlight-button btn btn-small no-margin" href="shop-with-sidebar.html">View Collection</a>
                        </div>
                    </div>
                    <!-- end text block -->
                    <!-- text block -->
                    <div class="col-md-3 col-sm-6 col-xs-12 text-block text-center">
                        <div class="text-block-inner">
                            <p class="title-small text-uppercase font-weight-600 black-text no-margin-bottom letter-spacing-1">45% Off</p>
                            <p class="text-large text-uppercase">Last Day Sale!</p>
                            <a class="highlight-button btn btn-small no-margin" href="shop-with-sidebar.html">Free Shopping</a>
                        </div>
                    </div>
                    <!-- end text block -->
                    <!-- text block -->
                    <div class="col-md-3 col-sm-6 col-xs-12 text-block text-center">
                        <div class="text-block-inner">
                            <p class="text-large text-uppercase no-margin-bottom">Added To Sale</p>
                            <p class="title-small text-uppercase font-weight-600 black-text width-70 center-col letter-spacing-1">New Styles</p>
                            <a class="highlight-button btn btn-small no-margin" href="shop-with-sidebar.html">Shop Now</a>
                        </div>
                    </div>
                    <!-- end text block -->
                    <!-- text block -->
                    <div class="col-md-3 col-sm-6 col-xs-12 text-block text-center">
                        <div class="text-block-inner">
                            <p class="text-large text-uppercase no-margin-bottom">Last 2 Days!</p>
                            <p class="title-small text-uppercase font-weight-600 black-text letter-spacing-1">Summer Sale</p>
                            <a class="highlight-button btn btn-small no-margin" href="shop-with-sidebar.html">Discover Now!</a>
                        </div>
                    </div>
                    <!-- end text block -->
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <!-- brand logo slider -->
                    <div id="owl-demo-brand" class="owl-carousel owl-theme dark-pagination owl-no-pagination owl-prev-next-simple">
                        <div class="item"><a href="shop-with-sidebar.html"><img src="images/barnd-logo1.jpg" alt=""/></a></div>
                        <div class="item"><a href="shop-with-sidebar.html"><img src="images/barnd-logo7.jpg" alt=""/></a></div>
                        <div class="item"><a href="shop-with-sidebar.html"><img src="images/barnd-logo3.jpg" alt=""/></a></div>
                        <div class="item"><a href="shop-with-sidebar.html"><img src="images/barnd-logo4.jpg" alt=""/></a></div>
                        <div class="item"><a href="shop-with-sidebar.html"><img src="images/barnd-logo5.jpg" alt=""/></a></div>
                        <div class="item"><a href="shop-with-sidebar.html"><img src="images/barnd-logo6.jpg" alt=""/></a></div>
                        <div class="item"><a href="shop-with-sidebar.html"><img src="images/barnd-logo2.jpg" alt=""/></a></div>
                        <div class="item"><a href="shop-with-sidebar.html"><img src="images/barnd-logo4.jpg" alt=""/></a></div>
                        <div class="item"><a href="shop-with-sidebar.html"><img src="images/barnd-logo1.jpg" alt=""/></a></div>
                        <div class="item"><a href="shop-with-sidebar.html"><img src="images/barnd-logo2.jpg" alt=""/></a></div>
                        <div class="item"><a href="shop-with-sidebar.html"><img src="images/barnd-logo3.jpg" alt=""/></a></div>
                        <div class="item"><a href="shop-with-sidebar.html"><img src="images/barnd-logo4.jpg" alt=""/></a></div>
                    </div>
                    <!-- end brand logo slider -->
                </div>
            </div>
        </section>

        <section class="bg-dark-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 text-center sm-margin-bottom-ten"><i class="icon-global medium-icon white-text"></i><h6 class="white-text margin-two no-margin-bottom">Free Shipping</h6></div>
                    <div class="col-md-3 col-sm-6 text-center sm-margin-bottom-ten"><i class="icon-heart medium-icon white-text"></i><h6 class="white-text margin-two no-margin-bottom">24/7 Customer Service</h6></div>
                    <div class="col-md-3 col-sm-6 text-center xs-margin-bottom-ten"><i class="icon-happy medium-icon white-text"></i><h6 class="white-text margin-two no-margin-bottom">No Additional Fees</h6></div>
                    <div class="col-md-3 col-sm-6 text-center"><i class="icon-gift medium-icon white-text"></i><h6 class="white-text margin-two no-margin-bottom">Same Day Delivery</h6></div>
                </div>
            </div>
        </section>
@endsection