<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Welcome Admin</div>
        </a>

        <!-- Nav Item - Dashboard -->
        <div class="sidebar-heading">
           Transaksi
        </div>
            <li class="nav-item">
                <a class="nav-link" href="/list-sewa">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>List Sewa Aktif</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/transaksi">
                    <i class="fas fa-clipboard-list"></i>
                    <span>Transaksi</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/history">
                    <i class="fas fa-history"></i>
                    <span>History</span></a>
            </li>


        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Admin
        </div>
            <li class="nav-item">
                <a class="nav-link" href="/data-penyewa">
                    <i class="fas fa-user"></i>
                    <span>Data Penyewa</span></a>
            </li> 
            <li class="nav-item {{ $title==='book' ?' active' :'' }}">
                <a class="nav-link" href="/buku">
                    <i class="fas fa-book"></i>
                    <span>Buku</span></a>
            </li>


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>