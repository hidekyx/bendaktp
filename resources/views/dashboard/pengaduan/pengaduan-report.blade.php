<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Layanan Pengaduan E-KTP</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.beranda') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.pengaduan') }}">Layanan Pengaduan E-KTP</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail Pengaduan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Detail Pengaduan</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered user-table">
                                <tr>
                                    <td>Kode</td>
                                    <td>{{ $pengaduan->kode_pengaduan }}</td>
                                </tr>
                                <tr>
                                    <td>NIK</td>
                                    <td>{{ $pengaduan->nik }}</td>
                                </tr>
                                <tr>
                                    <td>Nama Lengkap</td>
                                    <td>{{ $pengaduan->nama }}</td>
                                </tr>
                                <tr>
                                    <td>No Telp</td>
                                    <td>{{ $pengaduan->no_telp }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{ $pengaduan->email }}</td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td>
                                    <td>{{ $pengaduan->keterangan }}</td>
                                </tr>
                                <tr>
                                    <td>Foto</td>
                                    <td>
                                        <img src="{{ asset('storage/pengaduan/'.$pengaduan->file) }}" class="w-100">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pengaduan Diajukan Tanggal:</td>
                                    <td>{{ $pengaduan->created_at }}</td>
                                </tr>
                            </table>
                        </div>
                        <form class="form-horizontal form-material mx-2" method="post" action="{{ route('dashboard.pengaduan-report-action', $pengaduan->id_pengaduan) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Hasil Peninjauan</label>
                                <div class="col-md-12">
                                    <textarea rows="5" name="peninjauan" placeholder="Tuliskan hasil peninjauan" class="form-control p-3 form-control-line" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Bukti Penyelesaian (Foto)</label>
                                <div class="col-md-12">
                                    <input type="file" name="bukti" accept="image/png, image/gif, image/jpeg" onchange="loadFile(event)" class="form-control ps-0 form-control-line">
                                </div>
                                <img id="output" class="w-100" />
                                <script>
                                var loadFile = function(event) {
                                    var output = document.getElementById('output');
                                    output.src = URL.createObjectURL(event.target.files[0]);
                                    output.onload = function() {
                                        URL.revokeObjectURL(output.src)
                                    }
                                };
                                </script>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12 d-flex">
                                    <button class="btn btn-primary mx-auto mx-md-0 text-white">Selesaikan Pengaduan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- Row -->
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    @include('dashboard.footer')
</div>