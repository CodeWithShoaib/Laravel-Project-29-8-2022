@include('Frontend.layout.header')

        <!--Mobile Menu-->
        @include('Frontend.layout.mobileMenu')
        @include('Frontend.layout.notification')
        <!-- /.side-menu__block -->

        <!--Search Popup-->
        @include('Frontend.layout.search')
        @yield('main_content')


        @include('Frontend.layout.footer')
