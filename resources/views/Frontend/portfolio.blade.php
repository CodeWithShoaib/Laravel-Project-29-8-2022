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
        {{-- <div class="preloader">
            <div class="icon"></div>
        </div> --}}

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
                        <h1>{!! $portfolio->heading !!}</h1>
                        <div class="page-nav">
                            <ul class="bread-crumb clearfix">
                                <li><a href="index-main.html">Home</a></li>
                                <li class="active">Portfolio</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

        <!-- Gallery Section -->
        <section class="gallery-section">
            <div class="auto-container">
                <!--MixitUp Galery-->
                <div class="mixitup-gallery">
                    <!--Filter-->
                    <div class="filters centered clearfix">
                        <ul class="filter-tabs filter-btns clearfix">
                            <li class="active filter" data-role="button" data-filter="all">All<sup>[6]</sup></li>
                            <li class="filter" data-role="button" data-filter=".branding">Branding<sup>[3]</sup></li>
                            <li class="filter" data-role="button" data-filter=".illustration">illustration<sup>[3]</sup>
                            </li>
                            <li class="filter" data-role="button" data-filter=".photography">Photography<sup>[3]</sup>
                            </li>
                            <li class="filter" data-role="button" data-filter=".web-design">Web Design<sup>[4]</sup>
                            </li>
                        </ul>
                    </div>
                    <div class="filter-list row">
                        <!-- Gallery Item -->
                        @foreach ($showcase as $item)
                        <div class="gallery-item mix all web-design col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <figure class="image"><img src="images/gallery/1.jpg" alt=""></figure>
                                <a href="{{ asset('upload/showcase/'.$item->image) }}" class="lightbox-image overlay-box"
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
                        {{-- <div class="gallery-item mix all photography web-design col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <figure class="image"><img src="images/gallery/2.jpg" alt=""></figure>
                                <a href="images/gallery/2.jpg" class="lightbox-image overlay-box"
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
                        {{-- <div class="gallery-item mix all branding web-design col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <figure class="image"><img src="images/gallery/3.jpg" alt=""></figure>
                                <a href="images/gallery/3.jpg" class="lightbox-image overlay-box"
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
                        {{-- <div class="gallery-item mix all branding illustration col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <figure class="image"><img src="images/gallery/4.jpg" alt=""></figure>
                                <a href="images/gallery/4.jpg" class="lightbox-image overlay-box"
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
                        {{-- <div
                            class="gallery-item mix all branding illustration photography web-design col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <figure class="image"><img src="images/gallery/5.jpg" alt=""></figure>
                                <a href="images/gallery/5.jpg" class="lightbox-image overlay-box"
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
                        {{-- <div class="gallery-item mix all illustration photography col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <figure class="image"><img src="images/gallery/6.jpg" alt=""></figure>
                                <a href="images/gallery/6.jpg" class="lightbox-image overlay-box"
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
                    <div class="more-box">
                        <a class="theme-btn btn-style-one" href="portfolio.html">
                            <i class="btn-curve"></i>
                            <span class="btn-title">Load more work</span>
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
