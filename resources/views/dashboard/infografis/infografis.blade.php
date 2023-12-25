<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Infografis</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.beranda') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Infografis</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-md-6 col-4 align-self-center">
                <div class="text-end upgrade-btn">
                    <a href="{{ route('dashboard.infografis-create') }}" class="btn btn-primary d-none d-md-inline-block text-white">Tambah Infografis</a>
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
                        <h4 class="card-title">Daftar Infografis</h4>
                        <h6 class="card-subtitle">Data Infografis akan ditampilkan dalam bentuk galeri di website Kecamatan Benda</h6>
                        <div class="table-responsive">
                            <table class="table user-table table-hover">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">#</th>
                                        <th class="border-top-0">Judul</th>
                                        <th class="border-top-0">Gambar</th>
                                        <th class="border-top-0">Menu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($infografis as $key => $i)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td><b>{{ $i->judul }}</b></td>
                                        <td><img src="{{ asset('storage/infografis/'.$i->file) }}" style="max-width: 250px;" class="img-fluid" alt=""></td>
                                        <td style="width: 130px">
                                            <a href="{{ route('dashboard.infografis-edit', $i->id_infografis) }}"><button class="btn btn-warning mb-2 w-100"><i class="mdi me-2 mdi-pencil"></i>Edit</button></a>
                                            <form method="post" action="{{ route('dashboard.infografis-delete', $i->id_infografis) }}">
                                                @csrf
                                                <button type="submit" class="btn btn-danger text-white w-100"><i class="mdi me-2 mdi-delete"></i>Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        {{ $infografis->links() }}
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