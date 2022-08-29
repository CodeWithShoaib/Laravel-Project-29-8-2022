    <div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                {{-- <div class="sb-sidenav-menu-heading">Core</div> --}}
                <a class="nav-link" href="index.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                {{-- <div class="sb-sidenav-menu-heading">Interface</div> --}}
                <a class="nav-link collapsed" href="{{ route('admin.homeAdd') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                     Home
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <a class="nav-link collapsed" href="{{ route('admin.about') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                     About
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <a class="nav-link collapsed" href="{{ route('admin.C_Feedback.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                     Customer Testimonial
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <a class="nav-link collapsed" href="{{ route('admin.news.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                     News
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <a class="nav-link collapsed" href="{{ route('admin.team.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                     Team
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <a class="nav-link collapsed" href="{{ route('admin.service') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                     Service
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <a class="nav-link collapsed" href="{{ route('admin.portfolio') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                     Portfolio
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <a class="nav-link collapsed" href="{{ route('admin.product') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                     Product
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <a class="nav-link collapsed" href="{{ url('admin/items') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                     Items
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <a class="nav-link collapsed" href="{{ url('admin/blogs') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                     Blog
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>





            </div>
        </div>

    </nav>
</div>
