<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- OG --}}
    <meta name="og:site_name" content="{{ config('app.url') }}">
    <meta name="og:title" content="{{ config('app.name') }} | @yield('title')">
    <meta name="og:image" content="{{ asset('og-maskot-min.png') }}">
    <meta name="og:description" content="{{ config('app.description') }}">

    {{-- Browser --}}
    <meta name="title" content="{{ config('app.name') }} | @yield('title')">
    <meta name="description" content="{{ config('app.description') }}">
    <meta name="keywords" content="laundry">
    <meta name="author" content="{{ config('app.url') }}">
    <title>{{ config('app.name') }} | @yield('title')</title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('') }}assets/admin/css/nucleo-icons.css" rel="stylesheet" />
    <link href="{{ asset('') }}assets/admin/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets/admin/css/material-dashboard.css?v=3.1.0') }}" rel="stylesheet" />
    <link id="pagestyle" href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">

</head>

<body class="g-sidenav-show">
    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl fixed-start my-3 ms-3 overflow-hidden"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="d-flex align-items-center justify-content-center" href="" target="_blank">
                <img src="{{ asset('assets/img/default/maskot2.png') }}" alt="main_logo">
            </a>
        </div>
        <hr class="horizontal bg-dark d-flex justify-content-center mt-3">
        <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-dark {{ isRouteActive('dashboard') ? 'active bg-gradient-primary' : 'as' }}"
                        href="{{ route('dashboard') }}">
                        <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark {{ isRouteActive('admin-peserta') ? 'active bg-gradient-primary' : (isRouteActive('admin-insert-peserta') ? 'active bg-gradient-primary' : '') }}"
                        href="{{ route('admin-peserta') }}">
                        <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">groups</i>
                        </div>
                        <span class="nav-link-text ms-1">Peserta</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark {{ isRouteActive('admin-soal') ? 'active bg-gradient-primary' : (isRouteActive('admin-insert-soal') ? 'active bg-gradient-primary' : (isRouteActive('admin-ubah-atribut') ? 'active bg-gradient-primary' : '')) }}"
                        href="{{ route('admin-soal') }}">
                        <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">task</i>
                        </div>
                        <span class="nav-link-text ms-1">Soal</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark {{ isRouteActive('admin-hasil') ? 'active bg-gradient-primary' : '' }}"
                        href="{{ route('admin-hasil') }}">
                        <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">edit</i>
                        </div>
                        <span class="nav-link-text ms-1">Hasil</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark {{ isRouteActive('admin-akun') ? 'active bg-gradient-primary' : (isRouteActive('admin-edit-akun') ? 'active bg-gradient-primary' : '') }}"
                        href="{{ route('admin-akun') }}">
                        <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">person</i>
                        </div>
                        <span class="nav-link-text ms-1">Akun</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark d-flex align-items-center justify-content-center btn-logout"
                        href="{{ route('logout') }}">
                        <div class="text-dark text-center d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">logout</i>
                        </div>
                        <span class="nav-link-text ms-1">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 border-radius-lg">
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            data-scroll="true">
            <div class="container-fluid p-0">
                <div class="collapse navbar-collapse" id="navbar">
                    <nav class="page-header" aria-label="breadcrumb">
                        <h6 class="mb-0 ps-2 my-2">@yield('title')</h6>
                    </nav>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            @yield('content')
        </div>
    </main>
    <!--   Core JS Files   -->
    <script src="{{ asset('') }}assets/js/scripts.js"></script>
    <script src="{{ asset('') }}assets/admin/js/core/popper.min.js"></script>
    <script src="{{ asset('') }}assets/admin/js/core/bootstrap.min.js"></script>
    <script src="{{ asset('') }}assets/admin/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('') }}assets/admin/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="{{ asset('') }}assets/admin/js/plugins/chartjs.min.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('') }}assets/admin/js/material-dashboard.min.js?v=3.1.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <x-sweetalert2/>
    @yield('scripts')
</body>

</html>
