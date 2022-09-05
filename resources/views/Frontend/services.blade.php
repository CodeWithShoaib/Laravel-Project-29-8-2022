@extends('Frontend.layout.master')
@section('main_content')

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
        <div class="preloader">
            <div class="icon"></div>
        </div>

        <!-- Main Header -->

        <!-- End Main Header -->

        <!--Mobile Menu-->
        <div class="side-menu__block">


            <div class="side-menu__block-overlay custom-cursor__overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div><!-- /.side-menu__block-overlay -->
            <div class="side-menu__block-inner ">
                <div class="side-menu__top justify-content-end">

                    <a href="#" class="side-menu__toggler side-menu__close-btn"><img src="images/icons/close-1-1.png"
                            alt=""></a>
                </div><!-- /.side-menu__top -->


                <nav class="mobile-nav__container">
                    <!-- content is loading via js -->
                </nav>
                <div class="side-menu__sep"></div><!-- /.side-menu__sep -->
                <div class="side-menu__content">
                    <p>Linoor is a premium Template for Digital Agencies, Start Ups, Small Business and a wide range of
                        other agencies.</p>
                    <p><a href="mailto:needhelp@linoor.com">needhelp@linoor.com</a> <br> <a href="tel:888-999-0000">888
                            999 0000</a></p>
                    <div class="side-menu__social">
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div><!-- /.side-menu__content -->
            </div><!-- /.side-menu__block-inner -->
        </div><!-- /.side-menu__block -->

        <!--Search Popup-->
        <div class="search-popup">
            <div class="search-popup__overlay custom-cursor__overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div><!-- /.search-popup__overlay -->
            <div class="search-popup__inner">
                <form action="#" class="search-popup__form">
                    <input type="text" name="search" placeholder="Type here to Search....">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div><!-- /.search-popup__inner -->
        </div><!-- /.search-popup -->

        <!-- Banner Section -->
        <section class="page-banner">
            <div class="image-layer" style="background-image:url(images/background/image-7.jpg);"></div>
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="banner-inner">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        {{-- headingone --}}
                        <h1>{!! $service->headingone !!}</h1>
                        <div class="page-nav">
                            <ul class="bread-crumb clearfix">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="active">Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

        <!--Services Section-->
        <section class="services-section-three padd-top">
            <div class="auto-container">
                <div class="services">
                    <div class="row clearfix">
                        <!--Service Block-->
                        <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
                            data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="bottom-curve"></div>
                                <div class="icon-box"><span class="flaticon-vector"></span></div>
                                <h5><a href="#">Modern <br>Designing</a></h5>
                                <div class="text">Lorem ipsum is are many variations of pass of majority.</div>
                                <div class="link-box"><a href="#"><span class="fa fa-angle-right"></span></a></div>
                            </div>
                        </div>

                        <!--Service Block-->
                        <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
                            data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="bottom-curve"></div>
                                <div class="icon-box"><span class="flaticon-digital"></span></div>
                                <h5><a href="#">MARKETING <br>STRATEGY</a></h5>
                                <div class="text">Lorem ipsum is are many variations of pass of majority.</div>
                                <div class="link-box"><a href="#"><span class="fa fa-angle-right"></span></a></div>
                            </div>
                        </div>

                        <!--Service Block-->
                        <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
                            data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="bottom-curve"></div>
                                <div class="icon-box"><span class="flaticon-instant-camera"></span></div>
                                <h5><a href="#">Digital <br>Products</a></h5>
                                <div class="text">Lorem ipsum is are many variations of pass of majority.</div>
                                <div class="link-box"><a href="#"><span class="fa fa-angle-right"></span></a></div>
                            </div>
                        </div>

                        <!--Service Block-->
                        <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
                            data-wow-delay="900ms" data-wow-duration="1500ms">
                            <div class="inner-box">
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

        <!--Services Section-->
        <section class="services-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Title Block-->
                    <div class="title-block col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="sec-title">
                                {{-- headingtwo --}}
                                <h2>{!! $service->headingtwo !!}<span class="dot">.</span></h2>
                                {{-- contentone --}}
                                <div class="lower-text">
                                    {!! $service->contentone !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span class="flaticon-responsive"></span></div>
                            <h6><a href="#">Website <br>Development</a></h6>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span class="flaticon-computer"></span></div>
                            <h6><a href="#">graphic <br>designing</a></h6>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span class="flaticon-digital-marketing"></span></div>
                            <h6><a href="#">digital <br>marketing</a></h6>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span class="flaticon-development"></span></div>
                            <h6><a href="#">seo & content <br>writing</a></h6>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span class="flaticon-app-development"></span></div>
                            <h6><a href="#">App <br>Development</a></h6>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span class="flaticon-ui"></span></div>
                            <h6><a href="#">Ui/UX <br>designing</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- We Work Section -->
        <section class="we-work-section">
            <div class="auto-container">
                <div class="sec-title centered">
                    {{-- headingthree --}}
                    <h2>
                        {!! $service->headingthree !!}
                        <span class="dot">.</span></h2>
                </div>
                <!--Work Tabs-->
                <div class="work-tabs tabs-box">

                    <!--Tab Btns-->
                    <ul class="tab-btns tab-buttons clearfix">
                        <li data-tab="#tab-1" class="tab-btn active-btn"><span>Latest technology</span></li>
                        <li data-tab="#tab-2" class="tab-btn"><span>awesome support</span></li>
                        <li data-tab="#tab-3" class="tab-btn"><span>1 click demo install</span></li>
                    </ul>

                    <!--Tabs Container-->
                    <div class="tabs-content">

                        <!--Tab-->
                        <div class="tab active-tab" id="tab-1">
                            <div class="row clearfix">
                                <div class="image-col col-lg-5 col-md-6 col-sm-12">
                                    <div class="inner">
                                        <div class="image">
                                            {{-- image --}}
                                            <img src="images/resource/featured-image-14.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-col col-lg-7 col-md-6 col-sm-12">
                                    <div class="inner">
                                        <div class="content">
                                            <div class="text">
                                             {{-- contenttwo --}}
                                                <p>
                                                    {!! $service->contenttwo !!}
                                                </p>
                                                    {{-- contentthree --}}
                                                <p class="theme_color">
                                                {!! $service->contentthree !!}
                                                </p>
                                                <ul>
                                                    {{-- firstQuility --}}
                                                    <li>
                                                        {!! $service->firstQuility !!}
                                                    </li>
                                                    {{-- secondQuility --}}
                                                    <li>
                                                        {!! $service->secondQuility !!}
                                                    </li>
                                                    {{-- thirdQuility --}}
                                                    <li>
                                                        {!! $service->thirdQuility !!}

                                                    </li>
                                                    {{-- FourthQuility --}}
                                                    <li>
                                                        {!! $service->FourthQuility !!}

                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Tab-->
                        <div class="tab" id="tab-2">
                            <div class="row clearfix">
                                <div class="image-col col-lg-5 col-md-6 col-sm-12">
                                    <div class="inner">
                                        <div class="image">
                                            <img src="images/resource/featured-image-14.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-col col-lg-7 col-md-6 col-sm-12">
                                    <div class="inner">
                                        <div class="content">
                                            <div class="text">
                                                <p>There are many variations of passages of lorem ipsum available, but
                                                    the majority have suffered alteration in some form, by injected
                                                    humour, or randomised words which don't look even slightly
                                                    believable.</p>
                                                <p class="theme_color">If you are going to use a passage of Lorem Ipsum,
                                                    you need to be sure there isn't anything embarrassing hidden in the
                                                    middle of text. </p>
                                                <ul>
                                                    <li>Self-contained, state-of-the-art time clock</li>
                                                    <li>Scalability of up to 500 employees per time clock</li>
                                                    <li>The ability to connect up to 32 time clocks</li>
                                                    <li>Employee self-enrollment</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Tab-->
                        <div class="tab" id="tab-3">
                            <div class="row clearfix">
                                <div class="image-col col-lg-5 col-md-6 col-sm-12">
                                    <div class="inner">
                                        <div class="image">
                                            <img src="images/resource/featured-image-14.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-col col-lg-7 col-md-6 col-sm-12">
                                    <div class="inner">
                                        <div class="content">
                                            <div class="text">
                                                <p>There are many variations of passages of lorem ipsum available, but
                                                    the majority have suffered alteration in some form, by injected
                                                    humour, or randomised words which don't look even slightly
                                                    believable.</p>
                                                <p class="theme_color">If you are going to use a passage of Lorem Ipsum,
                                                    you need to be sure there isn't anything embarrassing hidden in the
                                                    middle of text. </p>
                                                <ul>
                                                    <li>Self-contained, state-of-the-art time clock</li>
                                                    <li>Scalability of up to 500 employees per time clock</li>
                                                    <li>The ability to connect up to 32 time clocks</li>
                                                    <li>Employee self-enrollment</li>
                                                </ul>
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

        <!-- Call To Section -->
        <section class="call-to-section-two alternate">
            <div class="auto-container">
                <div class="inner clearfix">
{{-- headingfour --}}
                    <h2>
                        {!! $service->headingfour !!}
                    </h2>
                    <div class="link-box">
                        <a class="theme-btn btn-style-two" href="about.html">
                            <i class="btn-curve"></i>
                            <span class="btn-title">Contact with us</span>
                        </a>
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

