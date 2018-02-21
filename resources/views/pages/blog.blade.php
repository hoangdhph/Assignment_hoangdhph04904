@extends('layouts.main')
@section('title', 'Blog')
@section('content')
        <!-- head section -->
        <section class="page-title parallax3 parallax-fix page-title-large">
            <div class="opacity-medium bg-black"></div>
            <img class="parallax-background-img" src="images/parallax-img39.jpg" alt="" />
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center animated fadeInUp">
                        <div class="separator-line bg-yellow no-margin-top margin-four"></div>
                        <!-- page title -->
                        <h1 class="white-text">Blog - Right Sidebar</h1>
                        <!-- end page title -->
                        <!-- page title tagline -->
                        <span class="white-text">Lorem Ipsum is simply dummy text of the printing.</span>
                        <!-- end title tagline -->
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
                        <!-- post item -->
                        @foreach ($posts as $p)
                            
                        <div class="blog-listing blog-listing-classic wow fadeIn">
                            <!-- post image -->
                            <div class="blog-image"><a href="{{$p->slug}}"><img src="{{asset('images/big-portfolio-img15.jpg')}}" alt=""/></a></div>
                            <!-- end post image -->
                            <div class="blog-details">
                                <div class="blog-date">Posted by <a href="blog-masonry-3columns.html">{{$p->author}}</a> | 02 January 2015 |
                                @php
                                    $cate = $p->getCate();
                                @endphp
                                @if($cate != null)
                                    <a href="{{url(App\Category::CATE_URL.$cate->slug)}}">{{$cate->name}}</a> 
                                @endif
                                </div>
                                <div class="blog-title"><a href="{{$p->slug}}">{{$p->title}}</a></div>
                                <div>{{ str_limit($p->short_desc, 200, ' ...') }}</div>
                                <div class="separator-line bg-black no-margin-lr margin-four"></div>
                                <div><a href="#" class="blog-like"><i class="fa fa-heart-o"></i>Likes</a><a href="#" class="blog-share"><i class="fa fa-share-alt"></i>Share</a><a href="#" class="comment"><i class="fa fa-comment-o"></i>3 comment(s)</a></div>
                                <a class="highlight-button btn btn-small xs-no-margin-bottom" href="{{$p->slug}}">Continue Reading</a>
                            </div>
                        </div>
                        @endforeach
                        <!-- end post item -->
                    </div>
                    <!-- end content  -->
                    <!-- sidebar  -->
                    <div class="col-md-3 col-sm-4 col-md-offset-1 xs-margin-top-ten sidebar">
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
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                        <!-- pagination -->
                        <div class="pagination">
                            {{ $posts->links() }}
                        </div>
                        <!-- end pagination -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end content section -->
@endsection