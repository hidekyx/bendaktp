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
                            <li class="breadcrumb-item active" aria-current="page">Layanan Pengajuan E-KTP</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-md-6 col-4 align-self-center">
                @if(auth()->user()->id_role == 1)
                <div class="text-end upgrade-btn">
                    <a href="{{ route('dashboard.ektp-create') }}" class="btn btn-primary d-none d-md-inline-block text-white">Tambah E-KTP Baru</a>
                </div>
                @endif
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
        <div class="row">
            <!-- column -->
            <div class="col-sm-12">
                @if (Session::has('success'))
                    <div class="alert alert-primary alert-dismissible text-dark" role="alert">
                        <span class="text-sm">{{ Session::get('success') }}</span>
                        <button type="button" class="btn-close text-lg py-3 opacity-10" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Daftar Pengajuan E-KTP</h4>
                        <h6 class="card-subtitle">Data E-KTP yang telah terdaftar pada database website Kecamatan Benda</h6>
                        <div class="table-responsive">
                            <table class="table user-table table-hover" id="ektp-table">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">#</th>
                                        <th class="border-top-0">NIK</th>
                                        <th class="border-top-0">Nama</th>
                                        <th class="border-top-0">TTL</th>
                                        <th class="border-top-0">Alamat</th>
                                        <th class="border-top-0">Status</th>
                                        <th class="border-top-0">Tanggal</th>
                                        <th class="border-top-0" style="width: 200px;">Menu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($ektp as $key => $e)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td><b>{{ $e->nik ?? '-' }}</b></td>
                                        <td>{{ $e->nama }}</td>
                                        <td>{{ $e->tempat_lahir }}, {{ \Carbon\Carbon::parse($e->tanggal_lahir)->isoFormat('D MMMM Y') }}</td>
                                        <td>{{ $e->alamat }}</td>
                                        <td><span class="badge bg-primary" style="border-radius: 20px; font-size: 14px;">{{ $e->status }}</span></td>
                                        <td>
                                            <p>Diajukan: <b>{{ \Carbon\Carbon::parse($e->created_at)->isoFormat('D MMMM Y - HH:mm') }}</b></p><hr>

                                            @if($e->processed_at)
                                            <p>Diproses: <b>{{ \Carbon\Carbon::parse($e->processed_at)->isoFormat('D MMMM Y - HH:mm') }}</b></p><hr>
                                            @endif

                                            @if($e->printed_at)
                                            <p>Dicetak: <b>{{ \Carbon\Carbon::parse($e->printed_at)->isoFormat('D MMMM Y - HH:mm') }}</b></p><hr>
                                            @endif

                                            @if($e->retrieved_at)
                                            <p>Diambil: <b>{{ \Carbon\Carbon::parse($e->retrieved_at)->isoFormat('D MMMM Y - HH:mm') }}</b></p><hr>
                                            @endif
                                        </td>
                                        <td style="width: 130px">
                                        @if($e->status == "Telah Diambil")
                                            <a href="{{ route('dashboard.ektp-detail', $e->id_ektp) }}"><button class="btn btn-primary mb-2 w-100"><i class="mdi me-2 mdi-information"></i>Detail</button></a>
                                        @endif
                                        @if(auth()->user()->id_role == 1)
                                            @if($e->status == "Sedang Dikonfirmasi")
                                            <a href="{{ route('dashboard.ektp-edit', $e->id_ektp) }}"><button class="btn btn-warning mb-2 w-100"><i class="mdi me-2 mdi-pencil"></i>Edit</button></a>
                                            <form method="post" action="{{ route('dashboard.ektp-process', $e->id_ektp) }}">
                                                @csrf
                                                <button type="submit" class="btn btn-primary text-white w-100 mt-2"><i class="mdi me-2 mdi-check"></i>Proses</button>
                                            </form>

                                            @elseif($e->status == "Sedang Proses")
                                            <a href="{{ route('dashboard.ektp-print-view', $e->id_ektp) }}"><button type="submit" class="btn btn-info text-white w-100 mt-2"><i class="mdi me-2 mdi-printer"></i>Cetak</button>

                                            @elseif($e->status == "Selesai Dicetak")
                                            <form method="post" action="{{ route('dashboard.ektp-retrieve', $e->id_ektp) }}">
                                                @csrf
                                                <button type="submit" class="btn btn-success text-white w-100 mt-2"><i class="mdi me-2 mdi-ticket-confirmation"></i>Ambil</button>
                                            </form>

                                            <form method="post" action="{{ route('dashboard.ektp-delete', $e->id_ektp) }}">
                                                @csrf
                                                <button type="submit" class="btn btn-danger text-white w-100"><i class="mdi me-2 mdi-delete"></i>Hapus</button>
                                            </form>
                                            @endif
                                        @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        {{ $ektp->links() }}
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Cetak Laporan E-KTP ke Excel</h4>
                        <form class="form-horizontal form-material mx-2" method="post" action="{{ route('dashboard.ektp-export') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <label class="col-md-12 mb-0">Tanggal Awal</label>
                                    <div class="col-md-12">
                                        <input type="date" name="tanggal_awal" placeholder="Tanggal Awal" class="form-control ps-0 form-control-line" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="col-md-12 mb-0">Tanggal Akhir</label>
                                    <div class="col-md-12">
                                        <input type="date" name="tanggal_akhir" placeholder="Tanggal Akhir" class="form-control ps-0 form-control-line" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-info d-none d-md-inline-block text-white">Cetak Data E-KTP</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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

@push('scripts')
    <script>
        $(document).ready( function () {
            $('#ektp-table').DataTable();
        } );
    </script>
@endpush