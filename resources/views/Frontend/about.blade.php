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
                        <h1>
                            {{-- headingone --}}
                            {!! $about->headingone !!}

                        </h1>
                        <div class="page-nav">
                            <ul class="bread-crumb clearfix">
                                <li><a href="index-main.html">Home</a></li>
                                <li class="active">About</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->


        <section class="featured-section featured-section__about-two">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Left Column-->
                    <div class="left-col col-lg-6 col-md-12 col-sm-12">
                        <div class="inner wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                            style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                            <div class="image-box"><img src="{{ asset('upload/About/'.$about->image) }}" alt="image"></div>
                        </div>
                    </div>
                    <!--Right Column-->
                    <div class="right-col col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="sec-title">
                                {{-- headingtwo --}}
                                <h2>

                                    {!! $about->headingtwo !!}
                                    <span class="dot">.</span></h2>
                                {{-- contentone --}}
                                <div class="lower-text">
                                    {!! $about->contentone !!}
                                </div>
                            </div>
                            <div class="features">
                                <div class="row clearfix">
                                    <div class="feature col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            {{-- headingthree --}}
                                            <h6>
                                                {!! $about->contentone !!}

                                            </h6>
                                            {{-- contenttwo --}}
                                            <div class="text">
                                                {!! $about->contenttwo !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feature col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            {{-- hewadingfour --}}
                                            <h6>
                                                {!! $about->headingfour !!}

                                            </h6>
                                            {{-- contentthree --}}
                                            <div class="text">
                                                {!! $about->contentthree !!}

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


        <section class="team-three team-three__about-two">
            <div class="auto-container">
                <div class="sec-title centered">
                    {{-- headingfive --}}
                    <h2>
                        {!! $about->headingfive !!}
                        <span class="dot">.</span></h2>
                </div>
                <div class="row">
                    @foreach ($team as $item)
                    <div class="col-md-6 col-lg-3">
                        <div class="team-card-three">
                            <div class="team-card-three__inner">
                                <div class="team-card-three__image">
                                    <img src="{{ asset('upload/team/'.$item->image) }}" alt="">
                                </div><!-- /.team-card-three__image -->
                                <div class="team-card-three__content">
                                    <h5 class="team-card-three__name">{!! $item->name !!}</h5>
                                    <div class="team-card-three__designation">{!! $item->post !!}</div>
                                </div><!-- /.team-card-three__content -->
                                <div class="team-card-three__hover">
                                    <h5 class="team-card-three__name">{!! $item->name !!}</h5>
                                    <div class="team-card-three__designation">{!! $item->post !!}</div>
                                    <ul class="team-card-three__social clearfix m-0 list-unstyled">
                                        <li><a href="{!! $item->facebook !!}"><span class="fab fa-facebook-square"></span></a></li>
                                        <li><a href="{!! $item->twitter !!}"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="{!! $item->Pinterest !!}"><span class="fab fa-pinterest-p"></span></a></li>
                                        <li><a href="{!! $item->Instagram !!}"><span class="fab fa-instagram"></span></a></li>
                                    </ul>
                                </div><!-- /.team-card-three__content -->
                            </div><!-- /.team-card-three__inner -->
                        </div><!-- /.team-card-three -->
                    </div>

                    @endforeach



                </div><!-- /.row -->
            </div><!-- /.auto-container -->
        </section>


        <!-- Parallax Section -->
        <section class="parallax-section jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 80%">
            <!-- <div class="image-layer" style="background-image: url(images/background/image-2.jpg);"></div> -->
            <img src="images/background/image-2.jpg" alt="" class="jarallax-img">
            <div class="auto-container">
                <div class="content-box">
                    <div class="icon-box"><span class="flaticon-app-development"></span></div>
                    {{-- headingsix --}}
                    <h2>
                        {!! $about->headingsix !!}
                    </h2>
                </div>
            </div>
        </section>
        <!-- End Funfacts Section -->

        <section class="testimonials-four">
            <div class="auto-container">
                <div class="testimonials-four__block__top">
                    <div class="sec-title">
                        {{-- headingseven --}}
                        <h2>
                            {!! $about->headingseven !!}
                        </h2>
                    </div>

                    <div class="block-text">
                        {{-- contentfour --}}
                        <p>
                            {!! $about->contentfour !!}
                        </p>
                    </div>
                </div><!-- /.testimonials-four__block__top -->
                <div class="testimonials-four-carousel owl-carousel owl-theme">
                    <div class="item">
                        <div class="testimonials-four-card">
                            <div class="testimonials-four-card__content">
                                <p>There are many variations of passages of lorem ipsum available but the
                                    majority have suffered alteration in some form, by injected humour,</p>
                                <div class="name">Sarah albert</div>
                                <div class="designation">Director</div>
                            </div><!-- /.testimonials-four-card__content -->
                            <div class="image">
                                <img src="images/resource/author-1.jpg" alt="">
                            </div>
                        </div><!-- /.testimonials-four-card -->
                    </div>
                    <div class="item">
                        <div class="testimonials-four-card">
                            <div class="testimonials-four-card__content">
                                <p>There are many variations of passages of lorem ipsum available but the
                                    majority have suffered alteration in some form, by injected humour,</p>
                                <div class="name">Mike hardson</div>
                                <div class="designation">Director</div>
                            </div><!-- /.testimonials-four-card__content -->
                            <div class="image">
                                <img src="images/resource/author-2.jpg" alt="">
                            </div>
                        </div><!-- /.testimonials-four-card -->
                    </div>
                    <div class="item">
                        <div class="testimonials-four-card">
                            <div class="testimonials-four-card__content">
                                <p>There are many variations of passages of lorem ipsum available but the
                                    majority have suffered alteration in some form, by injected humour,</p>
                                <div class="name">Shirley Smith</div>
                                <div class="designation">Director</div>
                            </div><!-- /.testimonials-four-card__content -->
                            <div class="image">
                                <img src="images/resource/author-3.jpg" alt="">
                            </div>
                        </div><!-- /.testimonials-four-card -->
                    </div>
                    <div class="item">
                        <div class="testimonials-four-card">
                            <div class="testimonials-four-card__content">
                                <p>There are many variations of passages of lorem ipsum available but the
                                    majority have suffered alteration in some form, by injected humour,</p>
                                <div class="name">Sarah albert</div>
                                <div class="designation">Director</div>
                            </div><!-- /.testimonials-four-card__content -->
                            <div class="image">
                                <img src="images/resource/author-1.jpg" alt="">
                            </div>
                        </div><!-- /.testimonials-four-card -->
                    </div>
                    <div class="item">
                        <div class="testimonials-four-card">
                            <div class="testimonials-four-card__content">
                                <p>There are many variations of passages of lorem ipsum available but the
                                    majority have suffered alteration in some form, by injected humour,</p>
                                <div class="name">Mike hardson</div>
                                <div class="designation">Director</div>
                            </div><!-- /.testimonials-four-card__content -->
                            <div class="image">
                                <img src="images/resource/author-2.jpg" alt="">
                            </div>
                        </div><!-- /.testimonials-four-card -->
                    </div>
                    <div class="item">
                        <div class="testimonials-four-card">
                            <div class="testimonials-four-card__content">
                                <p>There are many variations of passages of lorem ipsum available but the
                                    majority have suffered alteration in some form, by injected humour,</p>
                                <div class="name">Shirley Smith</div>
                                <div class="designation">Director</div>
                            </div><!-- /.testimonials-four-card__content -->
                            <div class="image">
                                <img src="images/resource/author-3.jpg" alt="">
                            </div>
                        </div><!-- /.testimonials-four-card -->
                    </div>
                    <div class="item">
                        <div class="testimonials-four-card">
                            <div class="testimonials-four-card__content">
                                <p>There are many variations of passages of lorem ipsum available but the
                                    majority have suffered alteration in some form, by injected humour,</p>
                                <div class="name">Sarah albert</div>
                                <div class="designation">Director</div>
                            </div><!-- /.testimonials-four-card__content -->
                            <div class="image">
                                <img src="images/resource/author-1.jpg" alt="">
                            </div>
                        </div><!-- /.testimonials-four-card -->
                    </div>
                    <div class="item">
                        <div class="testimonials-four-card">
                            <div class="testimonials-four-card__content">
                                <p>There are many variations of passages of lorem ipsum available but the
                                    majority have suffered alteration in some form, by injected humour,</p>
                                <div class="name">Mike hardson</div>
                                <div class="designation">Director</div>
                            </div><!-- /.testimonials-four-card__content -->
                            <div class="image">
                                <img src="images/resource/author-2.jpg" alt="">
                            </div>
                        </div><!-- /.testimonials-four-card -->
                    </div>
                    <div class="item">
                        <div class="testimonials-four-card">
                            <div class="testimonials-four-card__content">
                                <p>There are many variations of passages of lorem ipsum available but the
                                    majority have suffered alteration in some form, by injected humour,</p>
                                <div class="name">Shirley Smith</div>
                                <div class="designation">Director</div>
                            </div><!-- /.testimonials-four-card__content -->
                            <div class="image">
                                <img src="images/resource/author-3.jpg" alt="">
                            </div>
                        </div><!-- /.testimonials-four-card -->
                    </div>

                </div><!-- /.row -->
            </div><!-- /.auto-container -->
        </section>

        <section class="sponsors-section sponsors-section__about-two">
            <div class="sponsors-outer">
                <div class="auto-container">
                    <div class="sponsors-carousel owl-carousel owl-theme">
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
                    </div><!-- /.sponsors-carousel -->
                </div><!-- /.auto-container -->
            </div><!-- /.sponsors-outer -->
        </section><!-- /.sponsors-section -->

        <!-- Main Footer -->
        @include('Frontend.layout.mainfooter')

    </div>
    <!--End pagewrapper-->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
@endsection
