@extends('layouts.main')
@section('title', 'Blog')
@section('content')
               <!-- head section -->
        <section class="content-top-margin page-title page-title-small bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12 wow fadeInUp" data-wow-duration="300ms">
                        <!-- page title -->
                        <h1 class="black-text">Blog Single</h1>
                        <!-- end page title -->
                    </div>
                    <div class="col-md-4 col-sm-12 breadcrumb text-uppercase wow fadeInUp xs-display-none" data-wow-duration="600ms">
                        <!-- breadcrumb -->
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Blog</a></li>
                            <li>Blog Single</li>
                        </ul>
                        <!-- end breadcrumb -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end head section -->

        <!-- content section -->
        <section class="wow fadeIn">
            <div class="container">
                <div class="row">
                    <!-- content  -->
                    <div class="col-md-8 col-sm-8">
                        <!-- post title  -->
                        <h2 class="blog-details-headline text-black">{{$posts->title}}</h2>
                        <!-- end post title  -->
                        <!-- post date and categories  -->
                        <div class="blog-date no-padding-top">Posted by <a href="blog-masonry-3columns.html">{{$posts->author}}</a> | 02 January 2015 | <a href="blog-masonry-3columns.html">Design</a>, <a href="blog-masonry-3columns.html">Branding</a> </div>
                        <!-- end date and categories   -->
                        <!-- post image -->
                        <div class="blog-image margin-eight"><img src="images/parallax-img24.jpg" alt="" ></div>
                        <!-- end post image -->
                        <!-- post details text -->
                        <div class="blog-details-text">
                            <p class="text-large">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                            <p>{{$posts->content}}</p>
                            <div class="blog-image bg-white">
                                <!-- post details blockquote -->
                                <blockquote class="bg-gray">
                                    <p>{{$posts->short_desc}}</p>
                                    <footer>Jason Santa Maria</footer>
                                </blockquote>
                                <!-- end post details blockquote -->
                            </div>
                            <div class="blog-date no-padding-top margin-eight no-margin-bottom">
                                <!-- post tags -->
                                <h5 class="widget-title margin-one no-margin-top">Tags</h5>
                                <a href="blog-masonry-3columns.html">Advertisement</a>, <a href="blog-masonry-3columns.html">Smart Quotes</a>, <a href="blog-masonry-3columns.html">Unique</a>, <a href="blog-masonry-3columns.html">Design</a> </div>
                            <!-- end post tags -->
                        </div>
                        <!-- end post details text -->
                        <!-- about author -->
                        <div class="text-center margin-ten no-margin-bottom about-author text-left bg-gray">
                            <div class="blog-comment text-left clearfix no-margin">
                                <!-- author image -->
                                <a class="comment-avtar no-margin-top"><img src="images/avtar6.jpg" alt=""></a>
                                <!-- end author image -->
                                <!-- author text -->
                                <div class="comment-text overflow-hidden position-relative">
                                    <h5 class="widget-title">About The Author</h5>
                                    <p class="blog-date no-padding-top">Paul Scrivens - Creative Head</p>
                                    <p class="about-author-text no-margin">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>
                                <!-- end author text -->
                            </div>
                        </div>
                        <!-- end about author -->
                        <!-- social icon -->
                        <div class="text-center border-bottom margin-ten padding-four no-margin-top">
                            <a href="#" class="btn social-icon social-icon-large button"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="btn social-icon social-icon-large button"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="btn social-icon social-icon-large button"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="btn social-icon social-icon-large button"><i class="fa fa-tumblr"></i></a>
                            <a href="#" class="btn social-icon social-icon-large button"><i class="fa fa-instagram"></i></a>
                        </div>
                        <!-- end social icon -->
                        <!-- post comment -->
                        <div class="blog-comment-main xs-no-padding-top">
                            <h5 class="widget-title">Blog Comments</h5>
                            <div class="blog-comment">
                                <a class="comment-avtar"><img src="images/avtar5.jpg" alt=""></a>
                                <div class="comment-text overflow-hidden position-relative">
                                    <p class="blog-date no-padding-top"><a href="#">Nathan Ford</a>, March 09, 2015 <a href="#addcomment" class="comment-reply inner-link">Reply</a></p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                                <div class="blog-comment clearfix">
                                    <a class="comment-avtar"><img src="images/avtar6.jpg" alt=""></a>
                                    <div class="comment-text overflow-hidden position-relative">
                                        <p class="blog-date no-padding-top"><a href="#">Paul Scrivens</a>, March 09, 2015 <a href="#addcomment" class="comment-reply inner-link">Reply</a></p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-comment">
                                <a class="comment-avtar"><img src="images/avtar7.jpg" alt=""></a>
                                <div class="comment-text overflow-hidden position-relative">
                                    <p class="blog-date no-padding-top"><a href="#">Colin Powell</a>, March 07, 2015 <a href="#addcomment" class="comment-reply inner-link">Reply</a></p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end post comment -->
                        <!-- comment form -->
                        <div id="addcomment" class="blog-comment-form-main">
                            <h5 class="widget-title margin-five no-margin-top">Add a comment</h5>
                            <div class="blog-comment-form">
                                <form>
                                    <!-- input -->
                                    <input type="text" name="name" placeholder="Name">
                                    <!-- end input -->
                                    <!-- input  -->
                                    <input type="text" name="email" placeholder="Email">
                                    <!-- end input -->
                                    <!-- input  -->
                                    <input type="text" name="website" placeholder="Website">
                                    <!-- end input -->
                                    <!-- textarea  -->
                                    <textarea name="comment" placeholder="Comment"></textarea>
                                    <!-- end textarea  -->
                                    <!-- required  -->
                                    <span class="required">*Please complete all fields correctly</span>
                                    <!-- end required  -->
                                    <!-- button  -->
                                    <input type="submit" name="send message" value="send message" class="highlight-button-dark btn btn-small no-margin-bottom">
                                    <!-- end button  -->
                                </form>
                            </div>
                        </div>
                        <!-- end comment form -->
                    </div>
                    <!-- end content  -->
                    <!-- sidebar  -->
                    <div class="col-md-3 col-sm-4 col-md-offset-1 sidebar xs-margin-top-ten">
                        <!-- widget  -->
                        <div class="widget">
                            <form>
                                <i class="fa fa-search close-search search-button"></i>
                                <input type="text" placeholder="Search..." class="search-input" name="search">
                            </form>
                        </div>
                        <!-- end widget  -->
                        <!-- widget  -->
                        <div class="widget">
                            <h5 class="widget-title font-alt">Categories</h5>
                            <div class="thin-separator-line bg-dark-gray no-margin-lr"></div>
                            <div class="widget-body">
                                <ul class="category-list">
                                    <li><a href="blog-masonry-3columns.html">Web Design <span>48</span></a></li>
                                    <li><a href="blog-masonry-3columns.html">Featured Blog<span>25</span></a></li>
                                    <li><a href="blog-masonry-3columns.html">Photography Idea<span>32</span></a></li>
                                    <li><a href="blog-masonry-3columns.html">Design Tutorials<span>38</span></a></li>
                                    <li><a href="blog-masonry-3columns.html">News and Events<span>40</span></a></li>
                                    <li><a href="blog-masonry-3columns.html">Arts and Entertainment<span>28</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- end widget  -->
                        <!-- widget  -->
                        <div class="widget">
                            <h5 class="widget-title font-alt">Popular posts</h5>
                            <div class="thin-separator-line bg-dark-gray no-margin-lr"></div>
                            <div class="widget-body">
                                <ul class="widget-posts">
                                    <li class="clearfix">
                                        <a href="blog-single-right-sidebar.html"><img src="images/portfolio-img58.jpg" alt=""/></a>
                                        <div class="widget-posts-details"><a href="blog-single-right-sidebar.html">Elements of a Launch Page</a> Simon Schmid - 02 January</div>
                                    </li>
                                    <li class="clearfix">
                                        <a href="blog-single-right-sidebar.html"><img src="images/portfolio-img60.jpg" alt=""/></a>
                                        <div class="widget-posts-details"><a href="blog-single-right-sidebar.html">The Art of Design Etiquette</a> Paul Scrivens - 06 January</div>
                                    </li>
                                    <li class="clearfix">
                                        <a href="blog-single-right-sidebar.html"><img src="images/portfolio-img61.jpg" alt=""/></a>
                                        <div class="widget-posts-details"><a href="blog-single-right-sidebar.html">Easier is Better</a> Paul Boag - 08 January</div>
                                    </li>
                                    <li class="clearfix">
                                        <a href="blog-single-right-sidebar.html"><img src="images/portfolio-img62.jpg" alt=""/></a>
                                        <div class="widget-posts-details"><a href="blog-single-right-sidebar.html">Successful Websites</a> Simon Schmid - 16 January</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end widget  -->
                        <!-- widget  -->
                        <div class="widget">
                            <h5 class="widget-title font-alt">Tags Cloud</h5>
                            <div class="thin-separator-line bg-dark-gray no-margin-lr"></div>
                            <div class="widget-body tags">
                                <a href="blog-masonry-3columns.html">Advertisement</a>
                                <a href="blog-masonry-3columns.html">Blog</a>
                                <a href="blog-masonry-3columns.html">Fashion</a>
                                <a href="blog-masonry-3columns.html">Inspiration</a>
                                <a href="blog-masonry-3columns.html">Smart Quotes</a>
                                <a href="blog-masonry-3columns.html">Conceptual</a>
                                <a href="blog-masonry-3columns.html">Artistry</a>
                                <a href="blog-masonry-3columns.html">Unique</a>
                            </div>
                        </div>
                        <!-- end widget  -->
                        <!-- widget  -->
                        <div class="widget">
                            <h5 class="widget-title font-alt">Recent Comments</h5>
                            <div class="thin-separator-line bg-dark-gray no-margin-lr"></div>
                            <div class="widget-body">
                                <ul class="widget-posts">
                                    <li class="clearfix">
                                        <div class="widget-posts-details"><a href="blog-single-right-sidebar.html">Elements of A Launch Page</a> Simon Schmid - 02 January</div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="widget-posts-details"><a href="blog-single-right-sidebar.html">The Art of Design Etiquette</a> Paul Scrivens - 06 January</div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="widget-posts-details"><a href="blog-single-right-sidebar.html">Easier is Better Than Better</a> Paul Boag - 08 January</div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="widget-posts-details"><a href="blog-single-right-sidebar.html">Creating Successful Websites</a> Simon Schmid - 16 January</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end widget  -->
                        <!-- widget  -->
                        <div class="widget">
                            <h5 class="widget-title font-alt">Text Widget</h5>
                            <div class="thin-separator-line bg-dark-gray no-margin-lr"></div>
                            <div class="widget-body">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            </div>
                        </div>
                        <!-- end widget  -->
                        <!-- widget  -->
                        <div class="widget">
                            <h5 class="widget-title font-alt">Archive</h5>
                            <div class="thin-separator-line bg-dark-gray no-margin-lr"></div>
                            <div class="widget-body">
                                <ul class="category-list">
                                    <li><a href="blog-masonry-3columns.html">December 2014<span>48</span></a></li>
                                    <li><a href="blog-masonry-3columns.html">January 2015<span>25</span></a></li>
                                    <li><a href="blog-masonry-3columns.html">February 2015<span>32</span></a></li>
                                    <li><a href="blog-masonry-3columns.html">March 2015<span>38</span></a></li>
                                    <li><a href="blog-masonry-3columns.html">April 2015<span>40</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- end widget  -->
                    </div>
                    <!-- end sidebar  -->
                </div>
            </div>
        </section>
@endsection