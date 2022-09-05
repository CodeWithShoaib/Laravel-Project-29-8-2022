@extends('Frontend.layout.master')
@section('main_content')



        <!-- /.search-popup -->
        <!-- Banner Section -->
        <section class="banner-section banner-two">

            <div class="banner-carousel owl-theme owl-carousel">
                <!-- Slide Item -->
                <div class="slide-item">
                    {{-- bg-one --}}
                    {{-- upload/background/ --}}
                    <div class="image-layer" style="background-image: url({{ asset('upload/background/'.$index->bg_one) }});"></div>
                    <div class="shape-1"></div>
                    <div class="shape-2"></div>
                    <div class="shape-3"></div>
                    <div class="shape-4"></div>
                    <div class="shape-5"></div>
                    <div class="shape-6"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <div class="content">
                                <div class="inner">
                                    {{-- headingone --}}
                                    <div class="sub-title">{!! $index->headingone !!}</div>
                                    {{-- headingtwo --}}
                                    <h1>{!! $index->headingtwo !!}</h1>
                                    <div class="link-box">
                                        <a class="theme-btn btn-style-one" href="about.html">
                                            <i class="btn-curve"></i>
                                            <span class="btn-title">Discover More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide Item -->
                <div class="slide-item">
                    {{-- bg_two --}}
                    {{-- upload/background/ --}}
                    <div class="image-layer" style="background-image: url({{ asset('upload/background/'.$index->bg_two) }});"></div>
                    <div class="shape-1"></div>
                    <div class="shape-2"></div>
                    <div class="shape-3"></div>
                    <div class="shape-4"></div>
                    <div class="shape-5"></div>
                    <div class="shape-6"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <div class="content">
                                <div class="inner">
                                    <div class="sub-title">{!! $index->headingone !!}</div>
                                    <h1>{!! $index->headingtwo !!}</h1>
                                    <div class="link-box">
                                        <a class="theme-btn btn-style-one" href="about.html">
                                            <i class="btn-curve"></i>
                                            <span class="btn-title">Discover More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide Item -->
                <div class="slide-item">
                    {{-- bg_three --}}
                    {{-- bg_three --}}
                    <div class="image-layer" style="background-image: url({{ asset('upload/background/'.$index->bg_three) }});"></div>

                    <div class="shape-1"></div>
                    <div class="shape-2"></div>
                    <div class="shape-3"></div>
                    <div class="shape-4"></div>
                    <div class="shape-5"></div>
                    <div class="shape-6"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <div class="content">
                                <div class="inner">
                                    <div class="sub-title">{!! $index->headingone !!}</div>
                                    <h1>{!! $index->headingtwo !!}</h1>
                                    <div class="link-box">
                                        <a class="theme-btn btn-style-one" href="about.html">
                                            <i class="btn-curve"></i>
                                            <span class="btn-title">Discover More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--End Banner Section -->

        <!-- Funfacts Section -->
        <section class="facts-section alternate">
            <div class="auto-container">
                <div class="inner-container">

                    <!-- Fact Counter -->
                    <div class="fact-counter">
                        <div class="row clearfix">

                            <!--Column-->
                            <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                                <div class="inner">
                                    <div class="content">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="4000" data-stop="8705">0</span>
                                        </div>
                                               {{-- countingone --}}
                                        <div class="counter-title">{!! $index->countingone !!}</div>
                                    </div>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                                <div class="inner">
                                    <div class="content">
                                        <div class="count-outer count-box alternate">
                                            <span class="count-text" data-speed="3000" data-stop="480">0</span>
                                        </div>
                                        {{-- countingtwo --}}
                                        <div class="counter-title">{{ $index->countingtwo }}</div>
                                    </div>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                                <div class="inner">
                                    <div class="content">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="3000" data-stop="626">0</span>
                                        </div>
                                        {{-- countingthree --}}
                                        <div class="counter-title">{!! $index->countingthree !!}</div>
                                    </div>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                                <div class="inner">
                                    <div class="content">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="4000" data-stop="9704">0</span>
                                        </div>
                                        {{-- countingfour --}}
                                        <div class="counter-title">{!! $index->countingfour !!}</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Funfacts Section -->

        <!--Services Section-->
        <section class="services-section-two">
            <div class="auto-container">
                <div class="sec-title">
                    <!--Title Block-->
                    <div class="row clearfix">
                        <div class="column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            {{-- headingthree --}}
                            <h2>{!! $index->headingthree !!}<span class="dot">.</span></h2>
                        </div>
                        <div class="column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            {{-- text_one --}}
                            <div class="lower-text">
                                {!! $index->text_one !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services">
                    <div class="row clearfix">
                        <!--Service Block-->
                        <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="bottom-curve"></div>
                                <div class="icon-box"><span class="flaticon-vector"></span></div>
                                <h5><a href="#">Modern <br>Designing</a></h5>
                                <div class="text">Lorem ipsum is are many variations of pass of majority.</div>
                                <div class="link-box"><a href="#"><span class="fa fa-angle-right"></span></a></div>
                            </div>
                        </div>

                        <!--Service Block-->
                        <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="bottom-curve"></div>
                                <div class="icon-box"><span class="flaticon-digital"></span></div>
                                <h5><a href="#">MARKETING <br>STRATEGY</a></h5>
                                <div class="text">Lorem ipsum is are many variations of pass of majority.</div>
                                <div class="link-box"><a href="#"><span class="fa fa-angle-right"></span></a></div>
                            </div>
                        </div>

                        <!--Service Block-->
                        <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="bottom-curve"></div>
                                <div class="icon-box"><span class="flaticon-instant-camera"></span></div>
                                <h5><a href="#">Digital <br>Products</a></h5>
                                <div class="text">Lorem ipsum is are many variations of pass of majority.</div>
                                <div class="link-box"><a href="#"><span class="fa fa-angle-right"></span></a></div>
                            </div>
                        </div>

                        <!--Service Block-->
                        <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                                <div class="bottom-curve"></div>
                                <div class="icon-box"><span class="flaticon-monitor"></span></div>
                                <h5><a href="#">Website <br>Development</a></h5>
                                <div class="text">Lorem ipsum is are many variations of pass of majority.</div>
                                <div class="link-box"><a href="#"><span class="fa fa-angle-right"></span></a></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!--Featured Section-->
        <section class="featured-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Left Column-->
                    <div class="left-col col-lg-6 col-md-12 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image-box"><img src="{{ asset('upload/background/'.$index->imageone)}}" alt="">
                            </div>
                        </div>
                    </div>
                    <!--Right Column-->
                    <div class="right-col col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="sec-title">
                              {{-- headingfour --}}
                                <h2>{!! $index->headingfour !!}<span class="dot">.</span></h2>
                                {{-- text_two --}}
                                <div class="lower-text">
                                    {!! $index->text_two !!}
                                </div>
                            </div>
                            <div class="features">
                                <div class="row clearfix">
                                    <div class="feature col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            {{-- headingfive --}}
                                            <h6>{!! $index->headingfive !!}</h6>
                                            {{-- text_three --}}
                                            <div class="text">
                                                {!! $index->text_three !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feature col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            {{-- headingsix --}}
                                            <h6>
                                                {!! $index->headingsix !!}

                                            </h6>
                                            {{-- text_four --}}
                                            <div class="text">
                                                {!! $index->text_four !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Section -->
        <section class="gallery-section-two">
            <div class="auto-container">
                <div class="sec-title centered">
                    {{-- headingseven --}}

                    <h2>
                        {!! $index->headingseven !!}
                        <span class="dot">.</span></h2>
                </div>
            </div>
            <!--Porfolio Tabs-->
            <div class="project-tab">
                <div class="auto-container">
                    <div class="tab-btns-box">
                        <!--Tabs Header-->
                        <div class="tabs-header">
                            <ul class="product-tab-btns clearfix">
                                <li class="p-tab-btn active-btn" data-tab="#p-tab-1">All<sup>[6]</sup></li>
                                <li class="p-tab-btn" data-tab="#p-tab-2">Branding<sup>[8]</sup></li>
                                <li class="p-tab-btn" data-tab="#p-tab-3">illustration<sup>[7]</sup></li>
                                <li class="p-tab-btn" data-tab="#p-tab-4">Photography<sup>[10]</sup></li>
                                <li class="p-tab-btn" data-tab="#p-tab-5">Web Design<sup>[9]</sup></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Tabs Content-->
                <div class="p-tabs-content">
                    <!--Portfolio Tab / Active Tab-->
                    <div class="p-tab active-tab" id="p-tab-1">
                        <div class="project-carousel owl-theme owl-carousel">

                            <!-- Gallery Item -->
                            @foreach ($showcase  as $item)
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="{{ asset('upload/showcase/'.$item->image) }}" alt=""></figure>
                                    <a href="images/gallery/7.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>{!! $item->title !!}</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">{!! $item->content !!}</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach


                            <!-- Gallery Item -->








                        </div>
                    </div>

                    <!--Portfolio Tab -->
                    <div class="p-tab" id="p-tab-2">
                        <div class="project-carousel owl-theme owl-carousel">

                            <!-- Gallery Item -->
                            {{-- <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/7.jpg" alt=""></figure>
                                    <a href="images/gallery/7.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/8.jpg" alt=""></figure>
                                    <a href="images/gallery/8.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            <!-- Gallery Item -->
                            {{-- <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/9.jpg" alt=""></figure>
                                    <a href="images/gallery/9.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            <!-- Gallery Item -->
                            {{-- <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/10.jpg" alt=""></figure>
                                    <a href="images/gallery/10.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            <!-- Gallery Item -->
                            {{-- <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/7.jpg" alt=""></figure>
                                    <a href="images/gallery/7.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            <!-- Gallery Item -->
                            {{-- <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/8.jpg" alt=""></figure>
                                    <a href="images/gallery/8.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            <!-- Gallery Item -->
                            {{-- <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/9.jpg" alt=""></figure>
                                    <a href="images/gallery/9.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            <!-- Gallery Item -->
                            {{-- <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/10.jpg" alt=""></figure>
                                    <a href="images/gallery/10.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            <!-- Gallery Item -->
                            {{-- <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/7.jpg" alt=""></figure>
                                    <a href="images/gallery/7.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            <!-- Gallery Item -->
                            {{-- <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/8.jpg" alt=""></figure>
                                    <a href="images/gallery/8.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            <!-- Gallery Item -->
                            {{-- <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/9.jpg" alt=""></figure>
                                    <a href="images/gallery/9.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            <!-- Gallery Item -->
                            {{-- <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/10.jpg" alt=""></figure>
                                    <a href="images/gallery/10.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                        </div>
                    </div>

                    <!--Portfolio Tab -->
                    <div class="p-tab" id="p-tab-3">
                        <div class="project-carousel owl-theme owl-carousel">

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/7.jpg" alt=""></figure>
                                    <a href="images/gallery/7.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/8.jpg" alt=""></figure>
                                    <a href="images/gallery/8.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/9.jpg" alt=""></figure>
                                    <a href="images/gallery/9.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/10.jpg" alt=""></figure>
                                    <a href="images/gallery/10.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/7.jpg" alt=""></figure>
                                    <a href="images/gallery/7.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/8.jpg" alt=""></figure>
                                    <a href="images/gallery/8.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/9.jpg" alt=""></figure>
                                    <a href="images/gallery/9.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/10.jpg" alt=""></figure>
                                    <a href="images/gallery/10.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/7.jpg" alt=""></figure>
                                    <a href="images/gallery/7.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/8.jpg" alt=""></figure>
                                    <a href="images/gallery/8.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/9.jpg" alt=""></figure>
                                    <a href="images/gallery/9.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/10.jpg" alt=""></figure>
                                    <a href="images/gallery/10.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--Portfolio Tab -->
                    <div class="p-tab" id="p-tab-4">
                        <div class="project-carousel owl-theme owl-carousel">

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/7.jpg" alt=""></figure>
                                    <a href="images/gallery/7.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/8.jpg" alt=""></figure>
                                    <a href="images/gallery/8.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/9.jpg" alt=""></figure>
                                    <a href="images/gallery/9.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/10.jpg" alt=""></figure>
                                    <a href="images/gallery/10.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/7.jpg" alt=""></figure>
                                    <a href="images/gallery/7.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/8.jpg" alt=""></figure>
                                    <a href="images/gallery/8.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/9.jpg" alt=""></figure>
                                    <a href="images/gallery/9.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/10.jpg" alt=""></figure>
                                    <a href="images/gallery/10.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/7.jpg" alt=""></figure>
                                    <a href="images/gallery/7.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/8.jpg" alt=""></figure>
                                    <a href="images/gallery/8.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/9.jpg" alt=""></figure>
                                    <a href="images/gallery/9.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/10.jpg" alt=""></figure>
                                    <a href="images/gallery/10.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--Portfolio Tab -->
                    <div class="p-tab" id="p-tab-5">
                        <div class="project-carousel owl-theme owl-carousel">

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/7.jpg" alt=""></figure>
                                    <a href="images/gallery/7.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/8.jpg" alt=""></figure>
                                    <a href="images/gallery/8.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/9.jpg" alt=""></figure>
                                    <a href="images/gallery/9.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/10.jpg" alt=""></figure>
                                    <a href="images/gallery/10.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/7.jpg" alt=""></figure>
                                    <a href="images/gallery/7.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/8.jpg" alt=""></figure>
                                    <a href="images/gallery/8.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/9.jpg" alt=""></figure>
                                    <a href="images/gallery/9.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/10.jpg" alt=""></figure>
                                    <a href="images/gallery/10.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/7.jpg" alt=""></figure>
                                    <a href="images/gallery/7.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/8.jpg" alt=""></figure>
                                    <a href="images/gallery/8.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/9.jpg" alt=""></figure>
                                    <a href="images/gallery/9.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Item -->
                            <div class="gallery-item">
                                <div class="inner-box">
                                    <figure class="image"><img src="images/gallery/10.jpg" alt=""></figure>
                                    <a href="images/gallery/10.jpg" class="lightbox-image overlay-box"
                                        data-fancybox="gallery"></a>
                                    <div class="cap-box">
                                        <div class="cap-inner">
                                            <div class="cat"><span>Graphic</span></div>
                                            <div class="title">
                                                <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!--Why Us Section-->
        <section class="why-us-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Left Column-->
                    <div class="left-col col-lg-6 col-md-12 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="round-box">
                                <div class="image-box">
                                    <img src="{{ asset('upload/background/'.$index->imagetwo)}}" alt="">
                                </div>
                                <div class="vid-link">
                                    <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="lightbox-image">
                                        <div class="icon"><span class="flaticon-play-button-1"></span><i
                                                class="ripple"></i></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Right Column-->
                    <div class="right-col col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="sec-title">
                                {{-- headingeight --}}

                                <h2>{!! $index->headingeight !!}<span class="dot">.</span></h2>
                            </div>
                            <div class="features">
                                <div class="feature">
                                    <div class="inner-box">
                                   {{-- headingnine --}}
                                        <h6>
                                            {!! $index->headingnine !!}

                                        </h6>
                                        {{-- text_five --}}
                                        <div class="text">
                                            {!! $index->text_five !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="feature">
                                    <div class="inner-box">
                                        {{-- headingten --}}
                                        <h6>
                                            {!! $index->headingten !!}
                                        </h6>
                                        {{-- text_six --}}
                                        <div class="text">
                                            {!! $index->text_six !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="feature">
                                    <div class="inner-box">
                                        {{-- headingeleven --}}
                                        <h6>
                                            {!! $index->headingeleven !!}
                                        </h6>
                                        {{-- text_seven --}}
                                        <div class="text">
                                            {!! $index->text_seven !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Testimonials Section-->
        <section class="testimonials-section">
            <div class="auto-container">
                <div class="sec-title">
                    {{-- headingtwel --}}
                    <h2>Customer feedbacks<span class="dot">.</span></h2>
                </div>
                <div class="carousel-box">
                    <div class="testimonials-carousel owl-theme owl-carousel">


                        {{-- <div class="testi-block">
                            <div class="inner">
                                <div class="icon"><span>“</span></div>
                                <div class="info">
                                    <div class="image"><a href="team.html"><img src="images/resource/author-1.jpg"
                                                alt=""></a></div>
                                    <div class="name">Shirley Smith</div>
                                    <div class="designation">Director</div>
                                </div>

                                <div class="text">There are many variations of passages of lorem ipsum available but the
                                    majority have suffered alteration in some form, by injected humour, or randomised
                                    words which don't look even slightly believable.</div>
                            </div>
                        </div>
                        <div class="testi-block">
                            <div class="inner">
                                <div class="icon"><span>“</span></div>
                                <div class="info">
                                    <div class="image"><a href="team.html"><img src="images/resource/author-2.jpg"
                                                alt=""></a></div>
                                    <div class="name">Mike hardson</div>
                                    <div class="designation">Director</div>
                                </div>
                                <div class="text">There are many variations of passages of lorem ipsum available but the
                                    majority have suffered alteration in some form, by injected humour, or randomised
                                    words which don't look even slightly believable.</div>
                            </div>
                        </div> --}}
                        {{-- <div class="testi-block">
                            <div class="inner">
                                <div class="icon"><span>“</span></div>
                                <div class="info">
                                    <div class="image"><a href="team.html"><img src="images/resource/author-3.jpg"
                                                alt=""></a></div>
                                    <div class="name">Sarah albert</div>
                                    <div class="designation">Director</div>
                                </div>
                                <div class="text">There are many variations of passages of lorem ipsum available but the
                                    majority have suffered alteration in some form, by injected humour, or randomised
                                    words which don't look even slightly believable.</div>
                            </div>
                        </div> --}}
                        {{-- <div class="testi-block">
                            <div class="inner">
                                <div class="icon"><span>“</span></div>
                                <div class="info">
                                    <div class="image"><a href="team.html"><img src="images/resource/author-1.jpg"
                                                alt=""></a></div>
                                    <div class="name">Shirley Smith</div>
                                    <div class="designation">Director</div>
                                </div>
                                <div class="text">There are many variations of passages of lorem ipsum available but the
                                    majority have suffered alteration in some form, by injected humour, or randomised
                                    words which don't look even slightly believable.</div>
                            </div>
                        </div> --}}
                        {{-- <div class="testi-block">
                            <div class="inner">
                                <div class="icon"><span>“</span></div>
                                <div class="info">
                                    <div class="image"><a href="team.html"><img src="images/resource/author-2.jpg"
                                                alt=""></a></div>
                                    <div class="name">Mike hardson</div>
                                    <div class="designation">Director</div>
                                </div>
                                <div class="text">There are many variations of passages of lorem ipsum available but the
                                    majority have suffered alteration in some form, by injected humour, or randomised
                                    words which don't look even slightly believable.</div>
                            </div>
                        </div> --}}
@foreach ($CFeedback as $item)
<div class="testi-block">
    <div class="inner">
        <div class="icon"><span>“</span></div>
        <div class="info">
            <div class="image"><a href="team.html"><img src="{{ asset('upload/Customer_Feedback/'.$item->image) }}"
                        alt=""></a></div>
            <div class="name">{!! $item->titleone !!}</div>
            <div class="designation">{!! $item->titletwo !!}</div>
        </div>
        <div class="text">
{!! $item->content !!}
        </div>
    </div>
</div>
@endforeach

                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="features-section jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%">
{{-- bg_four--}}

             <div class="image-layer" style="background-image: url({{ asset('upload/background/'.$index->bg_four) }});"></div>

            <img src="images/background/image-.jpg" class="jarallax-img" alt="">
            <div class="auto-container">
                <div class="content-box">
                    {{-- headingthirteen --}}
                    <h2>
                        {!! $index->headingthirteen !!}
                        <span>.</span></h2>
                    <div class="features clearfix">
                        <div class="feature-block">
                            <div class="inner">
                                <div class="icon-box"><span class="flaticon-design-tools"></span></div>
                                {{-- Headingfourteen --}}
                                <h6>
                                    {!! $index->headingfourteen !!}
                                </h6>
                            </div>
                        </div>
                        <div class="feature-block">
                            <div class="inner">
                                <div class="icon-box"><span class="flaticon-idea"></span></div>
                                {{-- headingfifteen --}}
                                <h6>
                                    {!! $index->headingfifteen !!}

                                </h6>
                            </div>
                        </div>
                        <div class="feature-block">
                            <div class="inner">
                                <div class="icon-box"><span class="flaticon-clock"></span></div>
                                {{-- heading_sixteen --}}
                                <h6>
                                    {!! $index->heading_sixteen !!}

                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="link-box">
                        <a class="theme-btn btn-style-one" href="about.html">
                            <i class="btn-curve"></i>
                            <span class="btn-title">Discover More</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Funfacts Section -->

        <!--Get Quote Section-->
        <section class="get-quote-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Left Column-->
                    <div class="left-col col-xl-8 col-lg-12 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="featured-block clearfix">
                                {{-- 333 --}}
                                <div class="image"><img src="{{ asset('upload/background/'.$index->imagethree)}}" alt=""></div>
                                {{-- headingseventeen --}}

                                <h4>
                                    {!! $index->headingseventeen !!}

                                </h4>
                                {{-- text_eight --}}

                                <div class="text">

                                    {{-- {!! $index->text_eight !!} --}}
                                </div>
                            </div>
                            <div class="counter">
                                <div class="counter-inner clearfix">
                                    <div class="counter-text">
                                        <div class="count-box"><span class="count-text" data-stop="345600"
                                                data-speed="2500">0</span></div>
                                        <div class="counter-title">projects was completed successfully</div>
                                    </div>
                                    {{-- 10101 --}}
                                    <div class="counter-image"><img src="{{ asset('upload/background/'.$index->imagefour)}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Right Column-->
                    <div class="right-col col-xl-4 col-lg-12 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="form-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="default-form">
                                    <h4>Get a free quote <span>.</span></h4>
                                    <form method="post" action="contact.html">
                                        <div class="form-group">
                                            <div class="field-inner">
                                                <input type="text" name="username" value="" placeholder="Your Name"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="field-inner">
                                                <input type="email" name="email" value="" placeholder="Email Address"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="field-inner">
                                                <input type="text" name="phone" value="" placeholder="Phone Number"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="field-inner">
                                                <select class="custom-select-box">
                                                    <option>Choose Service</option>
                                                    <option>Website Development</option>
                                                    <option>Graphic Designing</option>
                                                    <option>Digital Marketing</option>
                                                    <option>App Development</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button class="theme-btn btn-style-one">
                                                <i class="btn-curve"></i>
                                                <span class="btn-title">Request a quote</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!--Sponsors Section-->
        <section class="sponsors-section">
            <div class="sponsors-outer">
                <!--Sponsors-->
                <div class="auto-container">
                    <!--Sponsors Carousel-->
                    <div class="sponsors-carousel owl-theme owl-carousel">
                        <div class="slide-item">
                            <figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure>
                        </div>
                        <div class="slide-item">
                            <figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure>
                        </div>
                        <div class="slide-item">
                            <figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure>
                        </div>
                        <div class="slide-item">
                            <figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure>
                        </div>
                        <div class="slide-item">
                            <figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure>
                        </div>
                        <div class="slide-item">
                            <figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure>
                        </div>
                        <div class="slide-item">
                            <figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure>
                        </div>
                        <div class="slide-item">
                            <figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure>
                        </div>
                        <div class="slide-item">
                            <figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure>
                        </div>
                        <div class="slide-item">
                            <figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- News Section -->
        <section class="news-section alt-bg">
            <div class="auto-container">
                <div class="sec-title centered">
                    {{-- headingeighteen --}}
                    <h2>
                        {!! $index->headingeighteen !!}
                        <span class="dot">.</span></h2>
                </div>

                <div class="row clearfix">
                    <!--News Block-->
                    @foreach ($news as $item)
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="blog-single.html"><img src="{{ asset('upload/news/'.$item->image) }}" alt=""></a>
                            </div>
                            <div class="lower-box">
                                <div class="post-meta">
                                    <ul class="clearfix">
                                        <li><span class="far fa-clock"></span> 20 Mar</li>
                                        <li><span class="far fa-user-circle"></span> Admin</li>
                                        <li><span class="far fa-comments"></span> 2 Comments</li>
                                    </ul>
                                </div>
                                <h5><a href="blog-single.html">{!! $item->title !!}</a></h5>
                                <div class="text">{!! $item->content !!}</div>
                                <div class="link-box"><a class="theme-btn" href="blog-single.html"><span
                                            class="flaticon-next-1"></span></a></div>
                            </div>
                        </div>
                    </div>

                    @endforeach

                    <!--News Block-->

                    <!--News Block-->

                </div>
            </div>
        </section>

        <!-- Fluid Section -->
        <section class="fluid-section">
            <div class="outer-container">
                <div class="row clearfix">
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            {{-- bg_five --}}
                            <div class="image-layer" style="background-image: url({{ asset('upload/background/'.$index->bg_five) }});">
                            </div>
                            <div class="content-box">
                                {{-- headingnineteen --}}
                                <h3>
                                    {!! $index->headingnineteen !!}
                                </h3>
                                <div class="link-box">
                                    <a class="theme-btn btn-style-one" href="about.html">
                                        <i class="btn-curve"></i>
                                        <span class="btn-title">Discover More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            {{-- bg_six --}}
                            <div class="image-layer" style="background-image: url({{ asset('upload/background/'.$index->bg_six) }});">
                            </div>
                            <div class="content-box">
                                {{-- heafingTwenty --}}
                                <h3>
                                    {!! $index->heafingTwenty !!}
                                </h3>
                                <div class="link-box">
                                    <a class="theme-btn btn-style-two" href="contact.html">
                                        <i class="btn-curve"></i>
                                        <span class="btn-title">Discover More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Footer -->
        @include('Frontend.layout.mainfooter')


    </div>
    <!--End pagewrapper-->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>




    @endsection
