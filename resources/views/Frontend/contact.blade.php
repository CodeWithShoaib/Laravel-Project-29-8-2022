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
                        <h1>Contact</h1>
                        <div class="page-nav">
                            <ul class="bread-crumb clearfix">
                                <li><a href="index-main.html">Home</a></li>
                                <li class="active">Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

        <!--Contact Section-->
        <section class="contact-section">
            <div class="auto-container">
                <div class="sec-title centered">
                    <h2>Offices near you<span class="dot">.</span></h2>
                </div>

                <div class="upper-info">
                    <div class="row clearfix">
                        <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h5>Austin</h5>
                                <div class="text">
                                    <ul class="info">
                                        <li>22 Texas West Hills</li>
                                        <li><a href="mailto:needhelp@linoor.com">needhelp@linoor.com</a></li>
                                        <li><a href="tel:666888000">666 888 000</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h5>Boston</h5>
                                <div class="text">
                                    <ul class="info">
                                        <li>5 Federal Street Boston</li>
                                        <li><a href="mailto:needhelp@linoor.com">needhelp@linoor.com</a></li>
                                        <li><a href="tel:666888000">666 888 000</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h5>New york</h5>
                                <div class="text">
                                    <ul class="info">
                                        <li>8th Broklyn New York</li>
                                        <li><a href="mailto:needhelp@linoor.com">needhelp@linoor.com</a></li>
                                        <li><a href="tel:666888000">666 888 000</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h5>baltimore</h5>
                                <div class="text">
                                    <ul class="info">
                                        <li>3 Lombabr 50 Baltimore</li>
                                        <li><a href="mailto:needhelp@linoor.com">needhelp@linoor.com</a></li>
                                        <li><a href="tel:666888000">666 888 000</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="map-box">
                    <iframe class="map-iframe"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230899.1642407818!2d145.06327708904033!3d-37.792102974783376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65cd0db468a97%3A0xb61fde84306fc38a!2sMelbourne%20Zoo!5e0!3m2!1sen!2s!4v1592307685926!5m2!1sen!2s"
                        style="border:0;" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="form-box">
                    <div class="sec-title">
                        <h2>Write Us a Message<span class="dot">.</span></h2>
                    </div>
                    <div class="default-form">
                        <form method="post" action="sendemail.php" id="contact-form">
                            <div class="row clearfix">
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-inner">
                                        <input type="text" name="username" value="" placeholder="Your Name" required="">
                                    </div>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-inner">
                                        <input type="email" name="email" value="" placeholder="Email Address"
                                            required="">
                                    </div>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-inner">
                                        <input type="text" name="phone" value="" placeholder="Phone Number" required="">
                                    </div>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-inner">
                                        <input type="text" name="subject" value="" placeholder="Subject" required="">
                                    </div>
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="field-inner">
                                        <textarea name="message" placeholder="Write Message" required=""></textarea>
                                    </div>
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <button class="theme-btn btn-style-one">
                                        <i class="btn-curve"></i>
                                        <span class="btn-title">Send message</span>
                                    </button>
                                </div>
                            </div>
                        </form>
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
