<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

    <div class="section-header">
        <h2>Layanan Pengaduan E-KTP</h2>
    </div>

    <div class="row gy-4">

        <div class="offset-lg-2 col-lg-8">
        <form role="form" class="php-email-forms" method="post" action="{{ route('dashboard.pengaduan-submit') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="form-group">
                    <label class="col-md-12 mb-2">Jenis Pengaduan</label>
                    <select class="form-select p-2 form-control-line" name="jenis_pengaduan">
                        <option disabled>Pilih Pengaduan:</option>
                        <option selected value="Perubahan">Perubahan Data E-KTP</option>
                        <option value="Rusak">E-KTP Rusak</option>
                        <option value="Hilang">E-KTP Hilang</option>
                        <option value="Gratifikasi">Gratifikasi E-KTP</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="col-md-12 mb-2">Nama Lengkap</label>
                    <div class="col-md-12">
                        <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control p-2 form-control-line" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12 mb-2">NIK</label>
                    <div class="col-md-12">
                        <input type="number" name="nik" placeholder="NIK" class="form-control p-2 form-control-line" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12 mb-2">No Telp</label>
                    <div class="col-md-12">
                        <input type="number" name="no_telp" placeholder="No Telp" class="form-control p-2 form-control-line" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12 mb-2">Email</label>
                    <div class="col-md-12">
                        <input type="email" name="email" placeholder="Email" class="form-control p-2 form-control-line" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12 mb-2">Keterangan</label>
                    <div class="col-md-12">
                        <textarea rows="5" name="keterangan" placeholder="Keterangan" class="form-control p-2 form-control-line" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12 mb-2">File Pengaduan (Foto)</label>
                    <div class="col-md-12">
                        <input type="file" name="file" placeholder="File Pengaduan" class="form-control p-2 form-control-line" required>
                    </div>
                </div>
                <div class="col-md-12">
                    @if(session('errors'))
                        <div class="alert alert-danger alert-dismissible text-dark" role="alert">
                            @foreach ($errors->all() as $error)
                            <span class="text-sm">{{ $error }}</span>
                            @endforeach
                            <button type="button" class="btn-close text-lg py-3 opacity-10" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if (Session::has('error'))
                        <div class="alert alert-danger alert-dismissible text-dark" role="alert">
                            {{ Session::get('error') }}
                            <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>
            </div>
            <div class="text-center mt-3"><button type="submit">Submit</button></div>
        </form>
        </div><!-- End Contact Form -->

    </div>

    </div>
</section>