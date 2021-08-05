<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon">
        <i class="fas fa-user-circle"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Administrator</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{ route('dashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Nav Item - Admin -->
@if (!empty($halaman) && $halaman == 'user')
<li class="nav-item">
    <a class="nav-link" href="{{ url('datauser')}}">
        <i class="fa fa-user"></i>
        <span>Data Akun Admin</span></a>
</li>
@else
<li class="nav-item">
    <a class="nav-link" href="{{ url('datauser')}}">
        <i class="fa fa-user"></i>
        <span>Data Akun Admin</span></a>
</li>
@endif

<li class="nav-item">
    <a class="nav-link" href="{{ route('kriteria')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Data Kriteria Cafe</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ url('alternatif')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Data Alternatif Cafe</span></a>
</li>
<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<!-- <div class="sidebar-heading">
    Interface
</div> -->

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-calculator"></i>
        <span>Perhitungan SPK</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-gradient-primry py-2 collapse-inner rounded">
            <a class="nav-link collapsed" href="{{ route('hitungkriteria')}}">Perhitungan Bobot Kriteria</a>
            <a class="nav-link collapsed" href="{{ route('hitungkonsisten')}}">Perhitungan Uji<br> Konsistensi Kriteria</a>
            <a class="nav-link collapsed" href="{{ route('hitungalternatif')}}">Perhitungan Alternatif</a>
        </div>
    </div>
</li>

<!-- Nav Item - hasil -->
<li class="nav-item">
    <a class="nav-link" href="{{ route('cekonsisten')}}">
        <i class="fas fa-poll"></i>
        <span>Hasil Uji Konsistensi Kriteria</span></a>
</li>

<!-- Nav Item - ranking -->
<li class="nav-item">
    <a class="nav-link" href="{{ route('ranking')}}">
        <i class="fas fa-poll"></i>
        <span>Perangkingan</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            @if (Auth::check())
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                    <img class="img-profile rounded-circle"
                        src="{{asset('assets/img/undraw_profile_3.svg')}}">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); 
                                document.getElementById('logout-form').submit();" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        {{__('Logout')}}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}"
                    method="POST" style="display: none;">
                    @csrf 
                    </form>
                </div>
            </li>
            @else
                <li class="nav-item">
	                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
	            </li>
            @endif
        </ul>

    </nav>
    <!-- End of Topbar -->