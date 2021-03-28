 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" >

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('complaint.index') }}">
            <i class="fas fa-fw fa-database"></i>
            <span>Lihat Data Keluhan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('transformasi.index') }}">
            <i class="fas fa-fw fa-exchange-alt"></i>
            <span>Kelola Dataset</span></a>
    </li>

    <hr class="sidebar-divider">

    {{-- <!-- Heading -->
    <div class="sidebar-heading">
        Klasterisasi
    </div> --}}

    

    <li class="nav-item">
        <a class="nav-link" href="{{ route('pengelompokan.index') }}">
            <i class="fas fa-fw fa-object-group"></i>
            <span>Pengelompokan Data</span></a>
    </li>

    <hr class="sidebar-divider">

     <!-- Nav Item - Charts -->
     <li class="nav-item">
        <a class="nav-link" href="{{ route('visualisasi.index') }}">
            <i class="fas fa-fw fa-chart-bar"></i>
            <span>Visualisasi Pemetaan</span></a>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('pelanggan.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Kelola User</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>
<!-- End of Sidebar -->