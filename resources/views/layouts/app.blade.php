<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="shortcut icon" type="image/png" href="{{  asset('images/meta-image.jpg' ) }}" />
    <link rel="stylesheet" href="{{  asset('assets/css/styles.min.css' ) }}" />
</head>

<body>
<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed">

    <!-- Sidebar Start -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
            <div class="brand-logo d-flex align-items-center justify-content-between">
                <a href="{{route ('dashboard')}}" class="text-nowrap logo-img">
                    <img src="{{ asset('images/logo.png') }}" alt="" width="150px"/>
                </a>
                <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                    <i class="ti ti-x fs-6"></i>
                </div>
            </div>

            <!-- Sidebar navigation-->
            <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                <ul id="sidebarnav">
                    <li class="nav-small-cap">
                        <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
                        <span class="hide-menu">Home</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('dashboard')}}" aria-expanded="false">
                            <i class="ti ti-atom"></i>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>
                    <!-- ---------------------------------- -->
                    <!-- Dashboard -->
                    <!-- ---------------------------------- -->
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)" aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                      <span class="d-flex">
                                        <i class="ti ti-shopping-cart"></i>
                                      </span>
                                <span class="hide-menu">Gestion Pack</span>
                            </div>

                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" href="{{route('dashboard.packs.create')}}">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Créer pack</span>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)" aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                      <span class="d-flex">
                                        <i class="ti ti-layout-grid"></i>
                                      </span>
                                <span class="hide-menu">Gestion blog</span>
                            </div>

                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" href="{{route('dashboard.articles.create')}}">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Créer article</span>
                                    </div>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" href="{{route('dashboard.articles.listAdmin')}}">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Liste articles</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>


                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
        <!--  Header Start -->
        <header class="app-header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item d-block d-xl-none">
                        <a class="nav-link sidebartoggler " id="headerCollapse" href="javascript:void(0)">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                </ul>
                <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">

                        <li class="nav-item dropdown">
                            <a class="nav-link " href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                <img src="{{  asset('assets/images/profile/user-1.jpg' ) }}" alt="" width="35" height="35" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                <div class="message-body">
                                    <a href="{{route('home')}}" class="d-flex align-items-center gap-2 dropdown-item">
                                        <i class="ti ti-globe fs-6"></i>
                                        <p class="mb-0 fs-3">site principal</p>
                                    </a>
                                    <a href="{{route('profile.edit')}}" class="d-flex align-items-center gap-2 dropdown-item">
                                        <i class="ti ti-user fs-6"></i>
                                        <p class="mb-0 fs-3">Profile</p>
                                    </a>
                                    <a href="{{route('logout')}}" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--  Header End -->
        <!-- Page Content -->
        <div class="body-wrapper-inner">
            <div class="container-fluid">
            {{ $slot }}
            </div>
        </div>

    </div>
</div>
<script src="{{  asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{  asset('assets/js/sidebarmenu.js') }}"></script>
<script src="{{  asset('assets/js/app.min.js') }}"></script>
<script src="{{  asset('assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
<script src="{{  asset('assets/libs/simplebar/dist/simplebar.js') }}"></script>
<script src="{{  asset('assets/js/dashboard.js') }}"></script>
<!-- solar icons -->
<script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>
