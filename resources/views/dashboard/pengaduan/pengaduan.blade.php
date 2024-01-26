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
                            <li class="breadcrumb-item active" aria-current="page">Layanan Pengaduan E-KTP</li>
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
                        <h4 class="card-title">Daftar Pengaduan</h4>
                        <h6 class="card-subtitle">Data pengaduan yang terdaftar melalui form pengaduan website Kecamatan Benda</h6>
                        <div class="table-responsive">
                            <table class="table user-table table-hover" id="pengaduan-table">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">#</th>
                                        <th class="border-top-0">Jenis</th>
                                        <th class="border-top-0">Kode</th>
                                        <th class="border-top-0">NIK/Nama</th>
                                        <th class="border-top-0">Kontak</th>
                                        <th class="border-top-0">Keterangan</th>
                                        <th class="border-top-0">Status</th>
                                        <th class="border-top-0">Tanggal</th>
                                        <th class="border-top-0" style="width: 200px;">Menu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pengaduan as $key => $p)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td><span class="badge bg-primary" style="border-radius: 20px; font-size: 14px;">{{ $p->jenis_pengaduan }}</span></td>
                                        <td><b>{{ $p->kode_pengaduan }}</b></td>
                                        <td>
                                            NIK: {{ $p->nik }}<br>
                                            Nama: {{ $p->nama }}
                                        </td>
                                        <td>
                                            No Telp: {{ $p->no_telp }}<br>
                                            Email: {{ $p->email }}
                                        </td>
                                        <td>
                                            <img src="{{ asset('storage/pengaduan/'.$p->file) }}" class="w-100">
                                            {{ $p->keterangan }}
                                        </td>
                                        <td><span class="badge bg-primary" style="border-radius: 20px; font-size: 14px;">{{ $p->status }}</span></td>
                                        <td>
                                            <p>Diajukan: <b>{{ \Carbon\Carbon::parse($p->created_at)->isoFormat('D MMMM Y - HH:mm') }}</b></p><hr>

                                            @if($p->confirmed_at)
                                            <p>Diproses: <b>{{ \Carbon\Carbon::parse($p->confirmed_at)->isoFormat('D MMMM Y - HH:mm') }}</b></p><hr>
                                            @endif

                                            @if($p->finished_at)
                                            <p>Diselesaikan: <b>{{ \Carbon\Carbon::parse($p->finished_at)->isoFormat('D MMMM Y - HH:mm') }}</b></p><hr>
                                            @endif
                                        </td>
                                        <td style="width: 130px">
                                        @if(auth()->user()->id_role == 1)
                                            @if($p->status == "Menunggu Konfirmasi")
                                            <form method="post" action="{{ route('dashboard.pengaduan-process', $p->id_pengaduan) }}">
                                                @csrf
                                                <button type="submit" class="btn btn-info text-white w-100 mt-2"><i class="mdi me-2 mdi-check"></i>Proses</button>
                                            </form>

                                            @elseif($p->status == "Sedang Diproses")
                                            <a href="{{ route('dashboard.pengaduan-report-view', $p->id_pengaduan) }}"><button type="submit" class="btn btn-success text-white w-100 mt-2"><i class="mdi me-2 mdi-printer"></i>Laporkan</button>

                                            @elseif($p->status == "Pengaduan Selesai")
                                            -

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
                        {{ $pengaduan->links() }}
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
            $('#pengaduan-table').DataTable();
        } );
    </script>
@endpush