<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

    <div class="section-header">
        <h2>Cek Status Pengaduan Layanan</h2>
    </div>

    <div class="row gy-4">

        <div class="col-lg-4">
        <form role="form" class="php-email-forms">
            <div class="row">
                <div class="col-md-12 form-group">
                    <select class="form-select p-2 form-control-line">
                        <option disabled>Cari Berdasarkan kode:</option>
                        <option selected value="Kode Pengaduan">Kode Pengaduan</option>
                    </select>
                </div>
                <div class="col-md-12 form-group mt-2 mb-2">
                    <input type="text" name="kode" class="form-control" placeholder="Cari berdasarkan kode pengaduan" required>
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
            <div class="text-center mt-3"><button type="submit">Cari</button></div>
        </form>
        </div><!-- End Contact Form -->

        @if($pengaduan)
        <div class="col-lg-8">
            <div class="card">
            <div class="card-body">
                    <h4>Status Pengaduan Layanan</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered user-table">
                            <tr>
                                <td>Kode Pengaduan</td>
                                <td>{{ $pengaduan->kode_pengaduan }}</td>
                            </tr>
                            <tr>
                                <td>Kategori Pengaduan</td>
                                <td>{{ $pengaduan->jenis_pengaduan }}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>
                                    @if($pengaduan->status == "Menunggu Konfirmasi")
                                    <span class="badge bg-primary">{{ $pengaduan->status }}</span>
                                    @elseif($pengaduan->status == "Sedang Diproses")
                                    <span class="badge bg-warning">{{ $pengaduan->status }}</span>
                                    @elseif($pengaduan->status == "Pengaduan Selesai")
                                    <span class="badge bg-success">{{ $pengaduan->status }}</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>
                                    <p>Diajukan: <b>{{ \Carbon\Carbon::parse($pengaduan->created_at)->isoFormat('D MMMM Y - HH:mm') }}</b></p>
                                    @if($pengaduan->confirmed_at)
                                    <hr><p>Diproses: <b>{{ \Carbon\Carbon::parse($pengaduan->confirmed_at)->isoFormat('D MMMM Y - HH:mm') }}</b></p>
                                    @endif

                                    @if($pengaduan->finished_at)
                                    <hr><p>Diselesaikan: <b>{{ \Carbon\Carbon::parse($pengaduan->finished_at)->isoFormat('D MMMM Y - HH:mm') }}</b></p>
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card-body">
                    <h4>Detail Pengaduan</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered user-table">
                            <tr>
                                <td>NIK</td>
                                <td>{{ $pengaduan->nik ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>{{ $pengaduan->nama }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $pengaduan->email }}</td>
                            </tr>
                            <tr>
                                <td>No telp</td>
                                <td>{{ $pengaduan->no_telp }}</td>
                            </tr>
                            <tr>
                                <td>Keterangan Pengaduan</td>
                                <td>{{ $pengaduan->keterangan }}</td>
                            </tr>
                            <tr>
                                <td>Keterangan Foto</td>
                                <td><img src="{{ asset('storage/pengaduan/'.$pengaduan->file) }}" class="w-100"></td>
                            </tr>
                        </table>
                    </div>
                </div>
                @if($pengaduan->status == "Pengaduan Selesai")
                <div class="card-body">
                    <h4>Detail Penyelesaian</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered user-table">
                            <tr>
                                <td>Deskripsi Penyelesaian</td>
                                <td>{{ $pengaduan->peninjauan }}</td>
                            </tr>
                            <tr>
                                <td>Bukti Foto</td>
                                <td><img src="{{ asset('storage/bukti/'.$pengaduan->bukti) }}" class="w-100"></td>
                            </tr>
                        </table>
                    </div>
                </div>
                @endif
            </div>
        </div>
        @endif

    </div>

    </div>
</section>