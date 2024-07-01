<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div style="width: 500px;"
        class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.svg') }}"
                alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="{{ route('home') }}"><img
                src="{{ asset('assets/images/logo-mini.svg') }}" alt="logo" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('home') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-compass"></i>
                </span>
                <span class="menu-title">Home</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('read') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-bell-outline"></i>
                </span>
                <span class="menu-title">Our Blogs</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="#">
                <span class="menu-icon">
                    <i class="mdi mdi-face"></i>
                </span>
                <span class="menu-title">Pendaftaran</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-icon">
                    <i class="mdi mdi-table-large"></i>
                </span>
                <span class="menu-title">Data Tables</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route ('artikel.index')}}">Artikel</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('kategori.index') }}">Kategori</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('testimoni.index') }}">Testimoni </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items" style="position: absolute; bottom: 0; width: 19%;" >
    
            <a class="nav-link" href="{{route ('welcome')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-arrow-top-left"></i>
                </span>
                <span class="menu-title">Pergi ke Tampilan User</span>
            </a>
        </li>
    </ul>
</nav>
