

@extends('Frontend.layout.master')
@section('main_content')

@include('Frontend.layout.notification')

    <div class="page-wrapper">

        <!-- style switcher -->
        <div class="style-switcher">
            <a href="#" id="switcher-toggler"><i class="fa fa-cog"></i></a>
            <h3>Color Skins</h3>
            <ul id="styleOptions" title="Switch Color">
                <li>
                    <a href="" data-theme="color-default" class="color-default">

                    </a>
                </li>
                <li>
                    <a href="" data-theme="color-2" class="color-2">

                    </a>
                </li>
                <li>
                    <a href="" data-theme="color-3" class="color-3">

                    </a>
                </li>
                <li>
                    <a href="" data-theme="color-4" class="color-4">

                    </a>
                </li>
                <li>
                    <a href="" data-theme="color-5" class="color-5">

                    </a>
                </li>
                <li>
                    <a href="" data-theme="color-6" class="color-6">

                    </a>
                </li>
            </ul>
            <div class="language-feature">
                <button class="ltr-switcher" data-href="#googtrans(en|en)">LTR</button><!-- /.ltr-switcher -->
                <button class="rtl-switcher" data-href="#googtrans(en|ar)">RTL</button><!-- /.rtl-switcher -->
            </div><!-- /.language-feature -->
            <div class="layout-feature">
                <a href="#" class="dark-switcher">Dark</a>
                <button class="boxed-switcher">Boxed</button><!-- /.ltr-switcher -->
            </div><!-- /.language-feature -->
        </div>
        <!-- Preloader -->
        {{-- <div class="preloader">
            <div class="icon"></div>
        </div> --}}







        <!-- Banner Section -->
        <section class="page-banner">
            <div class="image-layer" style="background-image:url(images/background/image-7.jpg);"></div>
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="banner-inner">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <h1>Blog Posts</h1>
                        <div class="page-nav">
                            <ul class="bread-crumb clearfix">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="active">Blog Posts</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Content Side-->
                    <div class="content-side col-lg-8 col-md-12 col-sm-12">
                        <div class="blog-posts">

                            @foreach ($blog as $item)
                            <div class="news-block-two">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <a href="blog-single.html"><img src="{{ asset('upload/blog/'.$item->image) }}" alt=""></a>
                                    </div>
                                    <div class="lower-box">
                                        <div class="post-meta">
                                            <ul class="clearfix">
                                                <li><span class="far fa-clock"></span> 20 Mar</li>
                                                <li><span class="far fa-user-circle"></span> Admin</li>
                                                <li><span class="far fa-comments"></span> 2 Comments</li>
                                            </ul>
                                        </div>
                                        <h4><a href="blog-single.html">{!! $item->heading !!}</a></h4>
                                        <div class="text">
                                            {!! $item->content !!}
                                        </div>
                                        <div class="link-box"><a class="theme-btn" href="blog-single.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach



                            <!--News Block-->


                        </div>
                        <div class="more-box">
                            <a class="theme-btn btn-style-one" href="blog.html">
                                <i class="btn-curve"></i>
                                <span class="btn-title">Load more posts</span>
                            </a>
                        </div>
                    </div>

                    <!--Sidebar Side-->
                    <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                        <aside class="sidebar blog-sidebar">
                            <!--Sidebar Widget-->
                            <div class="sidebar-widget search-box">
                                <div class="widget-inner">
                                    <form method="post" action="">
                                        @csrf
                                        <div class="form-group">
                                            <input type="search" name="search-field"  placeholder="Search"
                                                required="">
                                            <button type="submit"><span
                                                    class="icon flaticon-magnifying-glass-1"></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="sidebar-widget recent-posts">
                                <div class="widget-inner">
                                    <div class="sidebar-title">
                                        <h4>Latest Posts</h4>
                                    </div>
                                    @foreach ($blog as $item)
                                    <div class="post">
                                        <figure class="post-thumb"><img src="{{ asset('upload/blog/'.$item->image) }}" alt="image">
                                        </figure>
                                        <h5 class="text"><a href="#">
                                            {!! substr($item->content,0,20) !!}
                                            </a></h5>
                                    </div>
                                    @endforeach
                                    {{-- <div class="post">
                                        <figure class="post-thumb"><img src="images/resource/news-thumb-2.jpg" alt="">
                                        </figure>
                                        <h5 class="text"><a href="#">WE BUILD AND ACTIVATE BRANDS INSIGHT</a></h5>
                                    </div>

                                    <div class="post">
                                        <figure class="post-thumb"><img src="images/resource/news-thumb-3.jpg" alt="">
                                        </figure>
                                        <h5 class="text"><a href="#">A DEEP UNDERSTANDING OF OUR AUDIENCE</a></h5>
                                    </div> --}}

                                </div>
                            </div>

                            <div class="sidebar-widget archives">
                                <div class="widget-inner">
                                    <div class="sidebar-title">
                                        <h4>Categories</h4>
                                    </div>
                                    <ul>
                                        <li><a href="blog.html">Business</a></li>
                                        <li class="active"><a href="blog.html">Introductions</a></li>
                                        <li><a href="blog.html">One Page Template</a></li>
                                        <li><a href="blog.html">Parallax Effects</a></li>
                                        <li><a href="blog.html">New Technologies</a></li>
                                        <li><a href="blog.html">Video Backgrounds</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="sidebar-widget popular-tags">
                                <div class="widget-inner">
                                    <div class="sidebar-title">
                                        <h4>Tags</h4>
                                    </div>
                                    <div class="tags-list clearfix">
                                        <a href="#">Business</a>, <a href="#">Agency</a>, <a href="#">Technology</a>,<a
                                            href="#">Parallax</a>, <a href="#">Innovative</a>, <a
                                            href="#">Professional</a>,<a href="#">Experience</a>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar-widget recent-comments">
                                <div class="widget-inner">
                                    <div class="sidebar-title">
                                        <h4>Comments</h4>
                                    </div>

                                    <div class="comment">
                                        <div class="icon">
                                            <span class="flaticon-speech-bubble-2"></span>
                                        </div>
                                        <h5 class="text"><a href="#">A Wordpress Commenter on Launch New Mobile App</a>
                                        </h5>
                                    </div>

                                    <div class="comment">
                                        <div class="icon">
                                            <span class="flaticon-speech-bubble-2"></span>
                                        </div>
                                        <h5 class="text"><a href="#">John Doe on Template: <br>Comments</a></h5>
                                    </div>

                                    <div class="comment">
                                        <div class="icon">
                                            <span class="flaticon-speech-bubble-2"></span>
                                        </div>
                                        <h5 class="text"><a href="#">A Wordpress Commenter on Launch New Mobile App</a>
                                        </h5>
                                    </div>

                                    <div class="comment">
                                        <div class="icon">
                                            <span class="flaticon-speech-bubble-2"></span>
                                        </div>
                                        <h5 class="text"><a href="#">John Doe on Template: <br>Comments</a></h5>
                                    </div>

                                </div>
                            </div>


                        </aside>
                    </div>

                </div>
            </div>
        </div>

        <!-- Main Footer -->
        @include('Frontend.layout.mainfooter')


    </div>
    <!--End pagewrapper-->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>



