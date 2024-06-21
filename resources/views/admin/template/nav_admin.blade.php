<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="/admin" class="logo d-flex align-items-center">
            <img src="{{ asset('assets/img/admin.png') }}" alt="">
            <span class="d-none d-lg-block">Admin Pegawai</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li>
            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="{{ asset('assets/img/admin.png') }}" alt="Profile" class="rounded-circle">
                    <span class="d-none d-md-block dropdown-toggle ps-2">{{ auth()->user()->nama }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>{{ auth()->user()->nama }}</h6>
                        <span>Admin - Pegawai</span>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="/profil_admin" >
                            <i class="bi bi-person"></i>
                            <span>Profil Saya</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="/logout">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul>
            </li>
        </ul>
    </nav>

</header>


<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="/admin">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="/daftar_pegawai">
                <i class="bi bi-menu-button-wide"></i><span>Pegawai</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="/daftar_jabatan">
                <i class="bi bi-journal-text"></i><span>Jabatan</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="/daftar_departemen">
                <i class="bi bi-building"></i><span>Departemen</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="/daftar_pendidikan">
                <i class="bi bi-buildings"></i><span>Pendidikan</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="/daftar_status">
                <i class="bi bi-check2-square"></i><span>Status</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="/daftar_profil">
                <i class="bi bi-person"></i><span>Profil</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('logout') }}">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>

</aside>

