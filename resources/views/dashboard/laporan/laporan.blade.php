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
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Kategori Pengajuan E-KTP</h4>
                                <div id="ektpKategori"></div>
                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        var ektpCounts = @json($ektp_kategori);
                                        
                                        var seriesData = ektpCounts.map(item => item.total);
                                        var labelsData = ektpCounts.map(item => item.keterangan);

                                        new ApexCharts(document.querySelector("#ektpKategori"), {
                                            series: seriesData,
                                            chart: {
                                                height: 350,
                                                type: 'pie',
                                                toolbar: {
                                                    show: true
                                                }
                                            },
                                            labels: labelsData
                                        }).render();
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Kategori Pengaduan Layanan E-KTP</h4>
                                <div id="pengaduanKategori"></div>
                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        var pengaduanCounts = @json($pengaduan_kategori);
                                        
                                        var seriesData = pengaduanCounts.map(item => item.total);
                                        var labelsData = pengaduanCounts.map(item => item.jenis_pengaduan);

                                        new ApexCharts(document.querySelector("#pengaduanKategori"), {
                                            series: seriesData,
                                            chart: {
                                                height: 350,
                                                type: 'pie',
                                                toolbar: {
                                                    show: true
                                                }
                                            },
                                            labels: labelsData
                                        }).render();
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Grafik Data Pengajuan E-KTP</h4>
                                <div id="grafikPengajuan"></div>
                                <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            var dates = @json($ektp_tanggal);
                                            var totalCounts = @json($ektp_jumlah);

                                            new ApexCharts(document.querySelector("#grafikPengajuan"), {
                                                series: [{
                                                    name: "Total",
                                                    data: totalCounts
                                                }],
                                                chart: {
                                                    height: 350,
                                                    type: 'bar',
                                                    toolbar: {
                                                        show: true
                                                    }
                                                },
                                                plotOptions: {
                                                    bar: {
                                                        horizontal: false,
                                                    columnWidth: '55%',
                                                    endingShape: 'rounded'
                                                },
                                            },
                                            dataLabels: {
                                                enabled: false
                                            },
                                            xaxis: {
                                                categories: dates,
                                            },
                                            yaxis: {
                                                title: {
                                                    text: 'Total'
                                                }
                                            }
                                        }).render();
                                    });
                                </script>                       
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Grafik Data Pengaduan E-KTP</h4>
                                <div id="grafikPengaduan"></div>
                                <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            var dates = @json($pengaduan_tanggal);
                                            var totalCounts = @json($pengaduan_jumlah);

                                            new ApexCharts(document.querySelector("#grafikPengaduan"), {
                                                series: [{
                                                    name: "Total",
                                                    data: totalCounts
                                                }],
                                                chart: {
                                                    height: 350,
                                                    type: 'bar',
                                                    toolbar: {
                                                        show: true
                                                    }
                                                },
                                                plotOptions: {
                                                    bar: {
                                                        horizontal: false,
                                                    columnWidth: '55%',
                                                    endingShape: 'rounded'
                                                },
                                            },
                                            dataLabels: {
                                                enabled: false
                                            },
                                            xaxis: {
                                                categories: dates,
                                            },
                                            yaxis: {
                                                title: {
                                                    text: 'Total'
                                                }
                                            },
                                        }).render();
                                    });
                                </script>                       
                            </div>
                        </div>
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