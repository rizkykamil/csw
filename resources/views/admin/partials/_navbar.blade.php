<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.artikel.index') }}">
            <i class="far fa-newspaper"></i>
            <span>artikel</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.galeri.index')}}">
            <i class="fas fa-image"></i>
            <span>galeri</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.porto.index')}}">
            <i class="fas fa-briefcase"></i>
            <span>portofolio</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('register')}}">
            <i class="fas fa-user"></i>
            <span>Daftarkan Admin</span></a>
    </li>



    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
