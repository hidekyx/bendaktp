<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

    <div class="section-header">
        <h2>Cek Status Pengajuan E-KTP</h2>
    </div>

    <div class="row gy-4">

        <div class="col-lg-4">
        <form role="form" class="php-email-forms">
            <div class="row">
                <div class="col-md-12 form-group">
                    <select class="form-select p-2 form-control-line" name="tipe">
                        <option disabled>Cari Berdasarkan:</option>
                        <option selected value="nik">NIK</option>
                        <option value="nama">Nama</option>
                    </select>
                </div>
                <div class="col-md-12 form-group mt-2 mb-2">
                    <input type="text" name="value" class="form-control" placeholder="Cari berdasarkan kolom yang dipilih" required>
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

        @if($ektp)
        <div class="col-lg-8">
            <div class="card">
            <div class="card-body">
                    <h4>Status Pengajuan E-KTP</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered user-table">
                            <tr>
                                <td>Status</td>
                                <td>
                                    @if($ektp->status == "Sedang Dikonfirmasi")
                                    <span class="badge bg-primary">{{ $ektp->status }}</span>
                                    @elseif($ektp->status == "Sedang Proses")
                                    <span class="badge bg-warning">{{ $ektp->status }}</span>
                                    @elseif($ektp->status == "Selesai Dicetak")
                                    <span class="badge bg-info">{{ $ektp->status }}</span>
                                    @elseif($ektp->status == "Telah Diambil")
                                    <span class="badge bg-success">{{ $ektp->status }}</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>
                                    <p>Diajukan: <b>{{ \Carbon\Carbon::parse($ektp->created_at)->isoFormat('D MMMM Y - HH:mm') }}</b></p>
                                    @if($ektp->processed_at)
                                    <hr><p>Diproses: <b>{{ \Carbon\Carbon::parse($ektp->processed_at)->isoFormat('D MMMM Y - HH:mm') }}</b></p>
                                    @endif

                                    @if($ektp->printed_at)
                                    <hr><p>Dicetak: <b>{{ \Carbon\Carbon::parse($ektp->printed_at)->isoFormat('D MMMM Y - HH:mm') }}</b></p>
                                    @endif

                                    @if($ektp->retrieved_at)
                                    <hr><p>Diambil: <b>{{ \Carbon\Carbon::parse($ektp->retrieved_at)->isoFormat('D MMMM Y - HH:mm') }}</b></p>
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card-body">
                    <h4>Detail E-KTP</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered user-table">
                            <tr>
                                <td>NIK</td>
                                <td>{{ $ektp->nik ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>{{ $ektp->nama }}</td>
                            </tr>
                            <tr>
                                <td>Tempat/Tanggal Lahir</td>
                                <td>{{ $ektp->tempat_lahir }}, {{ \Carbon\Carbon::parse($ektp->tanggal_lahir)->isoFormat('D MMMM Y') }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>{{ $ektp->alamat }}</td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>{{ $ektp->jenis_kelamin }}</td>
                            </tr>
                            <tr>
                                <td>Golongan Darah</td>
                                <td>{{ $ektp->gol_darah }}</td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td>{{ $ektp->agama }}</td>
                            </tr>
                            <tr>
                                <td>Status Perkawinan</td>
                                <td>{{ $ektp->status_perkawinan }}</td>
                            </tr>
                            <tr>
                                <td>Pekerjaan</td>
                                <td>{{ $ektp->pekerjaan }}</td>
                            </tr>
                            <tr>
                                <td>Kewarganegaraan</td>
                                <td>{{ $ektp->kewarganegaraan }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endif

    </div>

    </div>
</section>