<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Layanan Pengajuan E-KTPE</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.beranda') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.ektp') }}">Layanan Pengajuan E-KTP</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail E-KTP</li>
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
                        <h3>Detail KTP</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered user-table">
                                <tr>
                                    <td>NIK</td>
                                    <td>{{ $ektp->nik }}</td>
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