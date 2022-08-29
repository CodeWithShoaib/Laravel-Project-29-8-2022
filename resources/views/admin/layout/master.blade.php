@include('admin.layout.header')
{{-- header --}}


        <div id="layoutSidenav">

            @include('admin.layout.adminsidebar')

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        @yield('main_content')




                    </div>
                </main>
    @include('admin.layout.footer')
    @yield('script')
