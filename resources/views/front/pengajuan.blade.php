<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

    <div class="section-header p-0">
        <h2>Alur Permohonan E-KTP</h2>
    </div>

    <div class="row gy-4">

        <div class="offset-lg-2 col-lg-8">
        <form role="form" class="php-email-forms" method="post" action="{{ route('dashboard.pengaduan-submit') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="form-group">
                    <h4><i class="bi bi-filter">Harap di Perhatikan dengan baik</i></h4>
                    <hr>
                    <p>
                        1. Datang ke Kantor Kecamatan membawa berkas persyaratan sesuai jenis permohonan E-KTP yang di ajukan (E-KTP Perekaman Baru, E-KTP Rusak, E-KTP Hilang dan E-KTP Perubahan Status) </br></br>
                        2. Berkas persyaratan akan diverifikasi oleh petugas terlebih dahulu, jika lengkap maka akan di proses permohonan E-KTP yang diajukan tetapi jika berkas persyaratan tidak lengkap maka akan dikembalikan </br></br>
                        3. Berkas permohonan diproses, tunggu panggilan dari petugas </br></br>
                        4. Petugas akan memanggil dan memberitahu estimasi proses pencetakan E-KTP yang diajukan </br></br>
                        5. Selesai, dan anda dapat tracking E-KTP anda secara online melalui website benda E-KTP (https://bendaktp.go.id/) agar anda 
                           mendapatkan informasi mengenai perkembangan status pengurusan E-KTP anda telah selesai dicetak atau belum dan anda juga dapat melakukan pengaduan E-KTP apabila E-KTP anda bermasalah </br></br></br></br>
                        
                        <i>Note : Permohonan E-KTP yang diajukan dengan datang langsung ke Kantor Kecamatan Benda</i>
                    </p>
                </div>
            </div>
        </form>
        </div><!-- End Contact Form -->

    </div>

    </div>
</section>