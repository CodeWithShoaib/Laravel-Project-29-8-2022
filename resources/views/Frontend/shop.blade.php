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
                        <h1>
                            {!! $product->heading !!}
                        </h1>
                        <div class="page-nav">
                            <ul class="bread-crumb clearfix">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="active">Shop</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

        <section class="shop-page">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="shop-sidebar">
                            <div class="shop-search shop-sidebar__single">
                                <form action="#">
                                    <input type="text" placeholder="Search">
                                    <button type="submit"><i class="flaticon-magnifying-glass"></i></button>
                                </form>
                            </div><!-- /.shop-search -->
                            <div class="shop-range shop-sidebar__single">
                                <h3 class="shop-sidebar__title">Price</h3><!-- /.shop-sidebar__title -->
                                <div class="product-sidebar__price-range">
                                    <div class="range-slider-price" data-range-min="10" data-range-max="200"
                                        data-limit="200" data-start-min="30" data-start-max="150"
                                        id="range-slider-price"></div>
                                    <div class="form-group">
                                        <div class="left">
                                            <p>$<span id="min-value-rangeslider"></span></p>
                                            <span>-</span>
                                            <p>$<span id="max-value-rangeslider"></span></p>
                                        </div><!-- /.left -->
                                        <div class="right">
                                            <button class="theme-btn btn-style-one">
                                                <i class="btn-curve"></i>
                                                <span class="btn-title">Filter</span>
                                            </button>
                                        </div><!-- /.right -->
                                    </div>
                                </div><!-- /.product-sidebar__price-range -->
                            </div><!-- /.shop-range -->
                            <div class="shop-category shop-sidebar__single">
                                <h3 class="shop-sidebar__title">Categories</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Introductions</a></li>
                                    <li><a href="#">One Page Template</a></li>
                                    <li><a href="#">Parallax Effects</a></li>
                                    <li><a href="#">New Technologies</a></li>
                                    <li><a href="#">Video Backgrounds</a></li>
                                </ul>
                            </div><!-- /.shop-category -->
                        </div><!-- /.shop-sidebar -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-9">
                        <div class="product-sorting default-form">
                            <p>Showing 1–9 of 12 results</p>
                            <div class="form-group">
                                <select class="custom-select-box">
                                    <option value="">Sort by Price</option>
                                    <option value="">Sort by Date</option>
                                    <option value="">Sort by Ratings</option>
                                </select>
                            </div><!-- /.form-group -->

                        </div><!-- /.product-sorting -->

                        <div class="row">
                            @foreach ($item as $products)
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="product-card">
                                    <div class="product-card__image">
                                        <img src="{{ asset('upload/item/'.$products->image) }}" alt="image">
                                        <div class="product-card__buttons">
                                            <a class="theme-btn btn-style-one" href="cart.html">
                                                <i class="btn-curve"></i>
                                                <span class="btn-title">Add To Cart</span>
                                            </a>
                                            <a class="theme-btn btn-style-two" href="product-details.html">
                                                <i class="btn-curve"></i>
                                                <span class="btn-title">Save</span>
                                            </a>
                                        </div><!-- /.product-card__buttons -->
                                    </div><!-- /.product-card__image -->
                                    <div class="product-card__content">
                                        <h3 class="product-card__title"><a href="product-details.html">{!! $products->name !!}</a>
                                        </h3>
                                        <p class="product-card__price">{!! $products->price !!}</p><!-- /.product-card__price -->
                                        <div class="product-card__stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div><!-- /.product-card__stars -->
                                    </div><!-- /.product-card__content -->
                                </div><!-- /.product-card -->
                            </div>

                            @endforeach


                        </div><!-- /.row -->

                        <div class="text-center load-more-products">
                            <a class="theme-btn btn-style-one" href="">
                                <i class="btn-curve"></i>
                                <span class="btn-title">Load More</span>
                            </a>
                        </div><!-- /.text-center -->
                    </div><!-- /.col-lg-9 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.shop-page -->

        <!-- Main Footer -->
        @include('Frontend.layout.mainfooter')


    </div>
    <!--End pagewrapper-->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
    @endsection


