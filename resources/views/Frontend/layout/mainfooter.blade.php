<footer class="main-footer normal-padding">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!--Column-->
                <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="footer-widget logo-widget">
                        <div class="widget-content">
                            <div class="logo">
                                <a href="index.html"><img id="fLogo" src="{{ asset('upload/logo/footer/'.$footerData->logo) }}" alt="" /></a>
                            </div>
                            <div class="text">
                                {!! $footerData->content !!}
                            </div>
                            <ul class="social-links clearfix">
                                <li><a href="{!! $footerData->Flink !!}"><span class="fab fa-facebook-square"></span></a></li>
                                <li><a href="{!! $footerData->Tlink !!}"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                <li><a href="{!! $footerData->Plink !!}"><span class="fab fa-pinterest-p"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="footer-widget links-widget">
                        <div class="widget-content">
                            <h6>Explore</h6>
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-12">
                                    <ul>
                                        <li><a href="#">{!! $footerData->pagelinkone !!}</a></li>
                                        {{-- pagelinkone --}}
                                        <li><a href="#">{!! $footerData->pagelinktwo !!}</a></li>
                                        <li><a href="#">{!! $footerData->pagelinkthree !!}</a></li>
                                        <li><a href="#">{!! $footerData->pagelinkfour !!}</a></li>
                                        <li><a href="#">{!! $footerData->pagelinkfive !!}</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <ul>
                                        <li><a href="#">{!! $footerData->support !!}</a></li>
                                        <li><a href="#">{{ $footerData->termsofuse }}</a></li>
                                        <li><a href="#">{{ $footerData->privacypolicy }}</a></li>
                                        <li><a href="#">{{ $footerData->help }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="footer-widget info-widget">
                        <div class="widget-content">
                            <h6>Contact</h6>
                            <ul class="contact-info">
                                <li class="address">
                                   {!! $footerData->address !!}
                                </li>
                                <li><span class="icon flaticon-call"></span><a href="tel:666888000">
                                    {!! $footerData->phone !!}

                                </a></li>
                                <li><span class="icon flaticon-email-2"></span><a
                                        href="mailto:needhelp@linoor.com">{!! $footerData->email !!}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="footer-widget newsletter-widget">
                        <div class="widget-content">
                            <h6>Subscribe</h6>
                            <div class="newsletter-form">
                                <form method="post" action="{{ route('admin.news.letter') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group clearfix">
                                        <input type="email" name="newsletter"  placeholder="Email Address"
                                            required>
                                        <button type="submit" class="theme-btn"><span
                                                class="fa fa-envelope"></span></button>
                                    </div>
                                </form>
                            </div>
                            <div class="text">
                                {!! $footerData->signup !!}
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner clearfix">
                <div class="copyright">
                    {!! $footerData->copyright !!}

                </div>
            </div>
        </div>
    </div>

</footer>
