<!-- ======= Header ======= -->
<section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:kec.benda@tangerangkota.go.id">kec.benda@tangerangkota.go.id</a></i>
            <i class="bi bi-whatsapp d-flex align-items-center ms-4"><a href="https://api.whatsapp.com/send?phone=81298154858&text=Saya ingin bertanya sesuatu" target="_blank"><span>081298154858</span></a></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="tiktok"><i class="bi bi-tiktok"></i></i></a>
            <a href="https://www.instagram.com/kec.benda/" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>
    </div>
</section>

<header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
    <a href="{{ asset('/') }}" class="logo d-flex align-items-center">
        <img src="assets/img/logo-benda.png" alt="">
        <h1 class="fs-6">Kecamatan benda <br> Kota Tangerang<span>.</span></h1>
    </a>
    <nav id="navbar" class="navbar">
        <ul>
        <li><a href="#beranda">Beranda</a></li>
        <li><a href="#infografis">Infografis</a></li>
        <li><a href="#faq">FAQ</a></li>
        <li class="dropdown"><a href="#"><span>Layanan</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
                <li><a href="{{ route('pengajuan') }}">Alur Pengajuan E-KTP</a></li>
                <li><a href="{{ route('cek') }}">Cek Status E-KTP</a></li>
                <li><a href="{{ route('pengaduan') }}">Pengaduan E-KTP</a></li>
                <li><a href="{{ route('status') }}">Status Pengaduan E-KTP</a></li>
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