<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">FAQs</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.beranda') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.faqs') }}">FAQs</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit FAQs</li>
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
                        <form class="form-horizontal form-material mx-2" method="post" action="{{ route('dashboard.faqs-update', $faqs->id_faqs) }}">
                            @csrf
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Judul</label>
                                <div class="col-md-12">
                                    <input type="text" name="judul" value="{{ $faqs->judul }}" placeholder="Judul pertanyaan dari FAQs yang akan ditampilkan" class="form-control ps-0 form-control-line" maxlength="100" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Keterangan</label>
                                <div class="col-md-12">
                                    <textarea rows="5" name="keterangan" placeholder="Isi dari FAQs" class="form-control ps-0 form-control-line" required>{{ $faqs->keterangan }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12 d-flex">
                                    <button class="btn btn-primary mx-auto mx-md-0 text-white">Simpan FAQ</button>
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