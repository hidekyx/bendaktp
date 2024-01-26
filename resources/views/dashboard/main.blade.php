<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, materialpro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, materialpro admin lite design, materialpro admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Material Pro Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Dashboard Kecamatan Benda - E-KTP</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/materialpro-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/logo-benda.png') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('back-assets/css/style.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand ms-4" href="{{ route('home') }}">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <img src="{{ asset('/assets/img/logo-benda.png') }}" style="max-width: 50px;" alt="homepage" class="dark-logo" />
                            <span>Benda E-KTP</span>
                        </b>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-white d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-lg-none d-md-block ">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white "
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <div class="ms-3">
                            <p class="font-weight-bolder mb-0">Halo, {{ auth()->user()->nama }}</p>
                            <p class="badge badge-sm bg-info">{{ auth()->user()->role->nama }}</p>
                        </div>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('dashboard.beranda') }}" aria-expanded="false">
                                <i class="mdi me-2 mdi-chart-bar"></i>
                                <span class="hide-menu">Laporan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('dashboard.ektp') }}" aria-expanded="false">
                                <i class="mdi me-2 mdi-account-card-details"></i>
                                <span class="hide-menu">Pengajuan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('dashboard.pengaduan') }}" aria-expanded="false">
                                <i class="mdi me-2 mdi-bullhorn"></i>
                                <span class="hide-menu">Pengaduan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('dashboard.infografis') }}" aria-expanded="false">
                                <i class="mdi me-2 mdi-message-image"></i>
                                <span class="hide-menu">Infografis</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('dashboard.faqs') }}" aria-expanded="false">
                                <i class="mdi me-2 mdi-network-question"></i>
                                <span class="hide-menu">FAQs</span>
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <div class="sidebar-footer">
                <div class="row">
                    <div class="col-12 link-wrap">
                        <!-- item-->
                        <a href="{{ route('logout') }}" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i
                                class="mdi mdi-power"></i> Logout</a>
                    </div>
                </div>
            </div>
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        @if($page == "Beranda")
            @include('dashboard.laporan.laporan')
        @elseif($page == "Ektp")
            @isset($subpage)
                @if($subpage == "Create")
                    @include('dashboard.ektp.ektp-create')
                @elseif($subpage == "Edit")
                    @include('dashboard.ektp.ektp-edit')
                @elseif($subpage == "Print")
                    @include('dashboard.ektp.ektp-print')
                @elseif($subpage == "Detail")
                    @include('dashboard.ektp.ektp-detail')
                @endif
            @else
                @include('dashboard.ektp.ektp')
            @endisset
        @elseif($page == "Pengaduan")
            @isset($subpage)
                @if($subpage == "Laporan")
                    @include('dashboard.pengaduan.pengaduan-laporan')
                @elseif($subpage == "Report")
                    @include('dashboard.pengaduan.pengaduan-report')
                @endif
            @else
                @include('dashboard.pengaduan.pengaduan')
            @endisset
        @elseif($page == "Infografis")
            @isset($subpage)
                @if($subpage == "Create")
                    @include('dashboard.infografis.infografis-create')
                @elseif($subpage == "Edit")
                    @include('dashboard.infografis.infografis-edit')
                @endif
            @else
                @include('dashboard.infografis.infografis')
            @endisset
        @elseif($page == "Faqs")
            @isset($subpage)
                @if($subpage == "Create")
                    @include('dashboard.faqs.faqs-create')
                @elseif($subpage == "Edit")
                    @include('dashboard.faqs.faqs-edit')
                @endif
            @else
                @include('dashboard.faqs.faqs')
            @endisset
        @endif
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('back-assets/plugins/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('back-assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('back-assets/js/app-style-switcher.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('back-assets/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('back-assets/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('back-assets/js/custom.js') }}"></script>
    <script src="{{ asset('back-assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    @stack('scripts')
</body>

</html>