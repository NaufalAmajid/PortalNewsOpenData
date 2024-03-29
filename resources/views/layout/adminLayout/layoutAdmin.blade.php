<!--

=========================================================
* Volt Free - Bootstrap 5 Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2021 Themesberg (https://www.themesberg.com)
* License (https://themesberg.com/licensing)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    {{-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --}}
    <!-- Primary Meta Tags -->
    <title>Dashboard Open Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Volt - Free Bootstrap 5 Dashboard">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Themesberg">
    <meta name="description"
        content="Sistem Informasi OpenData Kabupaten Klaten.">
    <meta name="keywords"
        content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard" />
    <link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-premium-bootstrap-5-dashboard">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://demo.themesberg.com/volt-pro">
    <meta property="og:title" content="Volt - Free Bootstrap 5 Dashboard">
    <meta property="og:description"
        content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
    <meta property="og:image"
        content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-bootstrap-5-dashboard/volt-pro-preview.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://demo.themesberg.com/volt-pro">
    <meta property="twitter:title" content="Volt - Free Bootstrap 5 Dashboard">
    <meta property="twitter:description"
        content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
    <meta property="twitter:image"
        content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-bootstrap-5-dashboard/volt-pro-preview.jpg">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="/template/forAdmin/assets/img/brand/logokabklaten.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/template/forAdmin/assets/img/brand/logokabklaten.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/template/forAdmin/assets/img/brand/logokabklaten.png">
    <link rel="manifest" href="/template/forAdmin/assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="/template/forAdmin/assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Sweet Alert -->
    <link type="text/css" href="/template/forAdmin/vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="/template/forAdmin/vendor/notyf/notyf.min.css" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="/template/forAdmin/css/volt.css" rel="stylesheet">

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
    {{-- OTHER CDN INCLUDES --}}
    <link rel="stylesheet" href="/otherAsset/css/bootstrap-icons.css">
    <link rel="stylesheet" href="/otherAsset/css/dataTables.jqueryui.min.css">
    <link rel="stylesheet" href="/otherAsset/themes/jquery-ui-themes-1.13.1/themes/pepper-grinder/jquery-ui.css">

    {{-- CSS CUSTOM --}}
    <link rel="stylesheet" href="/template/forAdmin/css/custom.css">
</head>

<body>

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->


    <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
        <a class="navbar-brand me-lg-5" href="/dashboard">
            <img class="navbar-brand-dark" src="/template/forAdmin/assets/img/brand/logokabklaten.png" alt="Logo Kabupaten Klaten" /> <img
                class="navbar-brand-light" src="/template/forAdmin/assets/img/brand/logokabklaten.png" alt="Logo Kabupaten Klaten" />
        </a>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
        <div class="sidebar-inner px-4 pt-3">
            <div
                class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
                <div class="d-flex align-items-center">
                    <div class="avatar-lg me-4">
                        @if (Auth::user()->is_admin == 1)
                        <img class="avatar rounded-circle" alt="Image placeholder"
                            src="/template/forAdmin/assets/img/team/administrator.png">
                        @else
                            <img class="avatar rounded-circle" alt="Image placeholder"
                                src="/template/forAdmin/assets/img/team/admin.png">
                        @endif
                    </div>
                    <div class="d-block">
                        <h2 class="h5 mb-3">Hi, {{ Auth::user()->name }}</h2>
                        <a href="#"
                            class="btn btn-secondary btn-sm d-inline-flex align-items-center" id="signout">
                            <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                </path>
                            </svg>
                            Sign Out
                        </a>
                    </div>
                </div>
                <div class="collapse-close d-md-none">
                    <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
                        aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
                        <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <ul class="nav flex-column pt-3 pt-md-0">
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link d-flex align-items-center">
                        <span class="sidebar-icon">
                            <img src="/template/forAdmin/assets/img/brand/logokabklaten.png" height="20" width="20"
                                alt="Volt Logo">
                        </span>
                        <span class="mt-1 ms-1 sidebar-text">Open Data</span>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('dashboard*') ? 'active' : '' }}">
                    <a href="/dashboard" class="nav-link d-flex justify-content-between">
                        <span>
                            <span class="sidebar-icon">
                                <i class="bi bi-card-text fs-5"></i>
                            </span>
                            <span class="sidebar-text p-2">Dashboard</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <span class="nav-link  collapsed  d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse" data-bs-target="#submenu-dataset">
                        <span>
                            <span class="sidebar-icon">
                                <i class="bi bi-kanban-fill fs-5"></i>
                            </span>
                            <span class="sidebar-text p-2">Dataset</span>
                        </span>
                        <span class="link-arrow">
                            <i class="bi bi-chevron-right fs-6"></i>
                        </span>
                    </span>
                    <div class="multi-level collapse {{ Request::is('dataset*') ? 'show' : '' }}" role="list"
                        id="submenu-dataset" aria-expanded="false">
                        <ul class="flex-column nav">
                            <li class="nav-item {{ Request::is('dataset/data*') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('dataset') }}">
                                    <span class="sidebar-text">Data / Informasi</span>
                                </a>
                            </li>
                            <li class="nav-item {{ Request::is('dataset/tags*') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('tags') }}">
                                    <span class="sidebar-text">Tags</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item {{ Request::is('sektoral*') ? 'active' : '' }}">
                    <a href="{{ route('sektoral') }}" class="nav-link d-flex justify-content-between">
                        <span>
                            <span class="sidebar-icon">
                                <i class="bi bi-globe2 fs-5"></i>
                            </span>
                            <span class="sidebar-text p-2">Sektoral</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('organisasi*') ? 'active' : '' }}">
                    <a href="{{ route('organisasi') }}" class="nav-link d-flex justify-content-between">
                        <span>
                            <span class="sidebar-icon">
                                <i class="bi bi-boxes fs-5"></i>
                            </span>
                            <span class="sidebar-text p-2">Daftar Admin</span>
                        </span>
                    </a>
                </li>
                <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
                <li class="nav-item">
                    <span class="nav-link  collapsed  d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse" data-bs-target="#submenu-pages">
                        <span>
                            <span class="sidebar-icon">
                                <i class="bi bi-person-rolodex fs-5"></i>
                            </span>
                            <span class="sidebar-text p-2">Administator</span>
                        </span>
                        <span class="link-arrow">
                            <i class="bi bi-chevron-right fs-6"></i>
                        </span>
                    </span>
                    @can('isAdmin')
                        <div class="multi-level collapse {{ Request::is('administrator*') ? 'show' : '' }}" role="list" id="submenu-pages" aria-expanded="false">
                            <ul class="flex-column nav">
                                <li class="nav-item {{ Request::is('administrator/users*') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('users') }}">
                                        <span class="sidebar-text">Kelola User</span>
                                    </a>
                                </li>
                                <li class="nav-item {{ Request::is('administrator/dataset*') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('admDataset') }}">
                                        <span class="sidebar-text">Dataset</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    @else
                        <div class="multi-level collapse" role="list" id="submenu-pages" aria-expanded="false">
                            <ul class="flex-column nav">
                                <div class="nav-item d-flex justify-content-center">
                                    <i class="bi bi-emoji-angry-fill" style="font-size: 80px;"></i>
                                </div>
                                <div class="nav-item d-flex justify-content-center">
                                    <p>Anda Bukan Administrator!</p>
                                </div>
                            </ul>
                        </div>
                    @endcan
                </li>
            </ul>
        </div>
    </nav>

    <main class="content">

        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
            <div class="container-fluid px-0">
                <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                    <div class="d-flex align-items-center">
                    </div>
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center">
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link text-dark notification-bell unread dropdown-toggle"
                                data-unread-notifications="true" href="#" role="button" data-bs-toggle="dropdown"
                                data-bs-display="static" aria-expanded="false">
                                <i class="bi bi-bell-fill fs-3" style="color: black !important;"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-center mt-2 py-0">
                                <div class="list-group list-group-flush">
                                    <a href="#"
                                        class="text-center text-primary fw-bold border-bottom border-light py-3">Notifications</a>
                                    <a href="#" class="list-group-item list-group-item-action border-bottom">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder"
                                                    src="/template/forAdmin/assets/img/team/profile-picture-1.jpg"
                                                    class="avatar-md rounded">
                                            </div>
                                            <div class="col ps-0 ms-2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="h6 mb-0 text-small">Jose Leos</h4>
                                                    </div>
                                                    <div class="text-end">
                                                        <small class="text-danger">a few moments ago</small>
                                                    </div>
                                                </div>
                                                <p class="font-small mt-1 mb-0">Added you to an event "Project
                                                    stand-up" tomorrow at 12:30 AM.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action border-bottom">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder"
                                                    src="/template/forAdmin/assets/img/team/profile-picture-2.jpg"
                                                    class="avatar-md rounded">
                                            </div>
                                            <div class="col ps-0 ms-2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="h6 mb-0 text-small">Neil Sims</h4>
                                                    </div>
                                                    <div class="text-end">
                                                        <small class="text-danger">2 hrs ago</small>
                                                    </div>
                                                </div>
                                                <p class="font-small mt-1 mb-0">You've been assigned a task for
                                                    "Awesome new project".</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action border-bottom">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder"
                                                    src="/template/forAdmin/assets/img/team/profile-picture-3.jpg"
                                                    class="avatar-md rounded">
                                            </div>
                                            <div class="col ps-0 m-2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="h6 mb-0 text-small">Roberta Casas</h4>
                                                    </div>
                                                    <div class="text-end">
                                                        <small>5 hrs ago</small>
                                                    </div>
                                                </div>
                                                <p class="font-small mt-1 mb-0">Tagged you in a document called
                                                    "Financial plans",</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action border-bottom">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder"
                                                    src="/template/forAdmin/assets/img/team/profile-picture-4.jpg"
                                                    class="avatar-md rounded">
                                            </div>
                                            <div class="col ps-0 ms-2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="h6 mb-0 text-small">Joseph Garth</h4>
                                                    </div>
                                                    <div class="text-end">
                                                        <small>1 d ago</small>
                                                    </div>
                                                </div>
                                                <p class="font-small mt-1 mb-0">New message: "Hey, what's up? All set
                                                    for the presentation?"</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action border-bottom">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder"
                                                    src="/template/forAdmin/assets/img/team/profile-picture-5.jpg"
                                                    class="avatar-md rounded">
                                            </div>
                                            <div class="col ps-0 ms-2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="h6 mb-0 text-small">Bonnie Green</h4>
                                                    </div>
                                                    <div class="text-end">
                                                        <small>2 hrs ago</small>
                                                    </div>
                                                </div>
                                                <p class="font-small mt-1 mb-0">New message: "We need to improve the
                                                    UI/UX for the landing page."</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item text-center fw-bold rounded-bottom py-3">
                                        <svg class="icon icon-xxs text-gray-400 me-1" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                            <path fill-rule="evenodd"
                                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        View all
                                    </a>
                                </div>
                            </div>
                        </li> --}}
                        <li class="nav-item dropdown ms-lg-3">
                            <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="media d-flex align-items-center">
                                    @if (Auth::user()->is_admin == 1)
                                    <img class="avatar rounded-circle" alt="Image placeholder"
                                        src="/template/forAdmin/assets/img/team/administrator.png">
                                    @else
                                        <img class="avatar rounded-circle" alt="Image placeholder"
                                            src="/template/forAdmin/assets/img/team/admin.png">
                                    @endif
                                    <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                                        <span
                                            class="mb-0 font-small fw-bold text-gray-900">{{ Auth::user()->name }}</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
                                {{-- <div role="separator" class="dropdown-divider my-1"></div> --}}
                                <form>
                                    @csrf
                                    <a class="dropdown-item d-flex align-items-center" id="logout">
                                        <i class="bi bi-box-arrow-right fs-5 px-2"></i> Logout
                                    </a>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <footer class="bg-white rounded shadow p-3 mb-4 mt-4 zindex-fixed">
            <div class="row">
                <div class="col-12 col-md-4 col-xl-6 mb-4 mb-md-0">
                    <p class="mb-0 text-center text-lg-start">© <span class="current-year"></span> <a
                            class="text-primary fw-normal">Adinda Nur R.</a>
                    </p>
                </div>
            </div>
        </footer>
    </main>

    <!-- Core -->
    <script src="/template/forAdmin/vendor/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="/template/forAdmin/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Vendor JS -->
    <script src="/template/forAdmin/vendor/onscreen/dist/on-screen.umd.min.js"></script>

    <!-- Slider -->
    <script src="/template/forAdmin/vendor/nouislider/distribute/nouislider.min.js"></script>

    <!-- Smooth scroll -->
    <script src="/template/forAdmin/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

    <!-- Charts -->
    <script src="/template/forAdmin/vendor/chartist/dist/chartist.min.js"></script>
    <script src="/template/forAdmin/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

    <!-- Datepicker -->
    <script src="/template/forAdmin/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

    <!-- Sweet Alerts 2 -->
    <script src="/template/forAdmin/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>

    <!-- Moment JS -->
    <script src="/otherAsset/js/moment.min.js"></script>

    <!-- Vanilla JS Datepicker -->
    <script src="/template/forAdmin/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

    <!-- Notyf -->
    <script src="/template/forAdmin/vendor/notyf/notyf.min.js"></script>

    <!-- Simplebar -->
    <script src="/template/forAdmin/vendor/simplebar/dist/simplebar.min.js"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Volt JS -->
    <script src="/template/forAdmin/assets/js/volt.js"></script>

    <!-- Other Libraries JS -->
    <script src="/otherAsset/js/jquery-3.6.0.min.js"></script>
    <script src="/otherAsset/js/jquery-ui.min.js"></script>
    <script src="/otherAsset/js/jquery.dataTables.min.js"></script>
    <script src="/otherAsset/js/dataTables.jqueryui.min.js"></script>

    <!-- Custom JS -->
    <script type="text/javascript">
        $(document).ready(function() {

            $('#logout, #signout').click(function() {

                const token = $('meta[name="csrf-token"]').attr('content');
                const name = '{{ Auth::user()->name }}';

                Swal.fire({
                    title: 'Apakah Anda Yakin?',
                    text: `${name} Akan Logout!`,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya',
                    cancelButtonText: 'Tidak'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: 'POST',
                            url: '{{ route('logout') }}',
                            data: {
                                "_token": token,
                                "logout": true
                            },
                            success: function(data) {
                                const result = JSON.parse(data);
                                if (result.status == 'success') {
                                    window.open(result.url, '_self');
                                }
                            }
                        });
                    }
                })
            });

        });
    </script>

    @yield('js')


</body>

</html>
