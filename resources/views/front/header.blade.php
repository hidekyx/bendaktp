<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
    <a href="{{ asset('/') }}" class="logo d-flex align-items-center">
        <img src="assets/img/logo-benda.png" alt="">
        <h1>BENDA E-KTP<span>.</span></h1>
    </a>
    <nav id="navbar" class="navbar">
        <ul>
        <li><a href="#beranda">Beranda</a></li>
        <li><a href="#infografis">Infografis</a></li>
        <li><a href="#faq">FAQ</a></li>
        <li class="dropdown"><a href="#"><span>Layanan</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
                <li><a href="#">Cek Status E-KTP</a></li>
                <li><a href="#">Pengajuan E-KTP</a></li>
                <li><a href="#">Pengaduan E-KTP</a></li>
            </ul>
        </li>
        <li><a href="{{ asset('/login') }}">Login</a></li>
        </ul>
    </nav><!-- .navbar -->

    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
</header><!-- End Header -->
<!-- End Header -->