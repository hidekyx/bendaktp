<!-- ======= Hero Section ======= -->
<section id="beranda" class="hero">
<div class="container position-relative">
    <div class="row gy-5" data-aos="fade-in">
    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
        <!-- update text -->
        <h4 class="text-white fw-bold">#AyoTrackingKTPMu</h4> 
        <!-- update text -->
        <h2>Selamat datang <br> <span>di Benda E-KTP</span></h2>
        <p>Kecamatan Benda menawarkan layanan alur pengajuan E-KTP, <br> pengecekan status pembuatan E-KTP, dan pengaduan E-KTP.</p>
        <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="{{ route('cek') }}" class="btn-get-started">Cek E-KTP</a>
            <a href="{{ route('status') }}" class="btn-watch-video d-flex align-items-center"><i class="bi bi-check2-circle"></i><span>Status Pengaduan</span></a>
        </div>
    </div>
    <div class="col-lg-6 order-1 order-lg-2">
        <img src="assets/img/asn-ktp.png" class="img-fluid p-5"  alt="" data-aos="zoom-out" data-aos-delay="100">
    </div>
    </div>
</div>

<div class="icon-boxes position-relative">
    <div class="container position-relative">
    <div class="row gy-4 mt-5">

        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="icon-box">
            <div class="icon"><i class="bi-person-vcard"></i></div>
            <h4 class="title"><a href="{{ route('pengajuan') }}" class="stretched-link">Alur Pengajuan E-KTP</a></h4>
        </div>
        </div><!--End Icon Box -->

        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="icon-box">
            <div class="icon"><i class="bi bi-search"></i></div>
            <h4 class="title"><a href="{{ route('cek') }}" class="stretched-link">Cek Status E-KTP</a></h4>
        </div>
        </div><!--End Icon Box -->

        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="icon-box">
            <div class="icon"><i class="bi bi-megaphone"></i></div>
            <h4 class="title"><a href="{{ route('pengaduan') }}" class="stretched-link">Pengaduan E-KTP</a></h4>
        </div>
        </div><!--End Icon Box -->

        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="icon-box">
            <div class="icon"><i class="bi bi-file-earmark-check"></i></div>
            <h4 class="title"><a href="{{ route('status') }}" class="stretched-link">Status Pengaduan</a></h4>
        </div>
        </div><!--End Icon Box -->
    </div>
    </div>
</div>

</div>
</section>
<!-- End Hero Section -->