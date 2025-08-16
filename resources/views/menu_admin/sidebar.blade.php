<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/" class="d-flex align-items-center text-decoration-none">
            <span class="app-brand-logo">
                <!-- Simple Circle Logo with "H" -->
                <svg width="50" height="50" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                    <!-- Bulatan -->
                    <circle cx="50" cy="50" r="48" fill="#696cff" />
                    <!-- Huruf H -->
                    <text x="50%" y="55%" text-anchor="middle" fill="#ffffff" font-size="48"
                        font-family="Arial, sans-serif" font-weight="bold" dominant-baseline="middle">
                        B
                    </text>
                </svg>
            </span>
            <span class="app-brand-text fw-bold ms-4 fs-4 text-dark">BRITANIA</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>
    <!-- Digital Clock -->
    <div id="digital-clock" class="text-center my-2"></div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        {{-- Menu hanya untuk role_id = 1 --}}
        @if (Auth::check() && Auth::user()->role_id == 1)
            <li class="menu-item {{ Request::is('dashboard') ? 'active' : '' }}">
                <a href="/dashboard" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Analytics">Dashboard</div>
                </a>
            </li>

            {{-- PELANGGAN --}}
            <li class="menu-item {{ Request::is('pelanggan*') ? 'active' : '' }}">
                <a href="/pelanggan" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-user"></i>
                    <div data-i18n="Analytics">Pelanggan</div>
                </a>
            </li>

            {{-- TEKNISI --}}
            <li class="menu-item {{ Request::is('teknisi*') ? 'active' : '' }}">
                <a href="/teknisi" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-wrench"></i>
                    <div data-i18n="Analytics">Teknisi</div>
                </a>
            </li>

            {{-- JADWAL SERVICE --}}
            <li class="menu-item {{ Request::is('jadwalservice*') ? 'active' : '' }}">
                <a href="/jadwalservice" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-calendar-check"></i>
                    <div data-i18n="Jadwal Service">Jadwal Service</div>
                </a>
            </li>
        @endif

        {{-- MONITORING JADWAL SERVICE --}}
        <li class="menu-item {{ Request::is('monitoring*') ? 'active' : '' }}">
            <a href="/monitoring" class="menu-link">
                <i class="menu-icon tf-icons bx bx-show-alt"></i> <!-- Ikon cocok untuk monitoring -->
                <div data-i18n="Monitoring Jadwal">Monitoring Jadwal</div>
            </a>
        </li>

        {{-- Menu khusus Admin --}}
        @if (Auth::check() && Auth::user()->role_id == 1)
            {{-- LAPORAN --}}
            <li class="menu-item {{ Request::is('laporan*') ? 'active' : '' }}">
                <a href="/laporan" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-file"></i>
                    <div data-i18n="Laporan">Laporan</div>
                </a>
            </li>

            {{-- USER --}}
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Hak Akses</span>
            </li>
            <li class="menu-item {{ Request::is('user*') ? 'active' : '' }}">
                <a href="/user" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-user-circle"></i>
                    <div data-i18n="Analytics">User</div>
                </a>
            </li>
        @endif



    </ul>
</aside>
