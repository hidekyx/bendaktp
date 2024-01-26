<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Layanan Pengajuan E-KTP</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.beranda') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.ektp') }}">Layanan Pengajuan E-KTP</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah E-KTP</li>
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
                        <form class="form-horizontal form-material mx-2" method="post" action="{{ route('dashboard.ektp-store') }}">
                            @csrf
                            <div class="form-group">
                                <label class="col-sm-12">Keterangan</label>
                                <div class="col-sm-12 border-bottom">
                                    <select class="form-select shadow-none ps-0 border-0 form-control-line" name="keterangan">
                                        <option value="Perekaman Baru">Perekaman Baru</option>
                                        <option value="E-KTP Rusak">E-KTP Rusak</option>
                                        <option value="E-KTP Hilang">E-KTP Hilang</option>
                                        <option value="E-KTP Perubahan Status">E-KTP Perubahan Status</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Nama</label>
                                <div class="col-md-12">
                                    <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control ps-0 form-control-line" maxlength="40" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">NIK</label>
                                <div class="col-md-12">
                                    <input type="text" id="nik" name="nik" placeholder="NIK" class="form-control ps-0 form-control-line" maxlength="20" oninput="nikInput(this);" required>
                                </div>
                                <script type="text/javascript">
                                    function nikInput(element) {
                                        element.value = element.value.replace(/[^0-9]/gi, "");
                                    }
                                </script>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Tempat Lahir</label>
                                <div class="col-md-12">
                                    <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control ps-0 form-control-line" maxlength="40" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Tanggal Lahir</label>
                                <div class="col-md-12">
                                    <input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" class="form-control ps-0 form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12">Jenis Kelamin</label>
                                <div class="col-sm-12 border-bottom">
                                    <select class="form-select shadow-none ps-0 border-0 form-control-line" name="jenis_kelamin">
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12">Golongan Darah</label>
                                <div class="col-sm-12 border-bottom">
                                    <select class="form-select shadow-none ps-0 border-0 form-control-line" name="gol_darah">
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="AB">AB</option>
                                        <option value="O">O</option>
                                        <option value="-">-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Alamat</label>
                                <div class="col-md-12">
                                    <textarea rows="5" name="alamat" placeholder="Alamat Lengkap" class="form-control ps-0 form-control-line" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Agama</label>
                                <!-- <div class="col-md-12">
                                    <input type="text" name="agama" placeholder="Agama" class="form-control ps-0 form-control-line" required>
                                </div> -->
                                <div class="col-sm-12 border-bottom">
                                    <select class="form-select shadow-none ps-0 border-0 form-control-line" name="agama">
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Khonghucu">Khonghucu</option>
                                        <option value="-">-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12">Status Perkawinan</label>
                                <div class="col-sm-12 border-bottom">
                                    <select class="form-select shadow-none ps-0 border-0 form-control-line" name="status_perkawinan">
                                        <option value="Belum Kawin">Belum Kawin</option>
                                        <option value="Kawin">Kawin</option>
                                        <option value="Cerai Hidup">Cerai Hidup</option>
                                        <option value="Cerai Mati">Cerai Mati</option>
                                        <option value="-">-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Pekerjaan</label>
                                <div class="col-md-12">
                                    <input type="text" name="pekerjaan" placeholder="Pekerjaan" class="form-control ps-0 form-control-line" maxlength="40" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12 d-flex">
                                    <button class="btn btn-primary mx-auto mx-md-0 text-white">Simpan E-KTP</button>
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