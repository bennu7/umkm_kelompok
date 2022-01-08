<header class="navbar navbar-expand-md navbar-light d-print-none">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href="/">
                <img src="http://umkm.test/dist/img/logo/Insel (3).png" width="110" height="32" alt="Tabler" class="navbar-brand-image">
            </a>
        </h1>
        <ul class="navbar-nav mr-auto">
            {{-- <li class="nav-item active"> --}}
            <li class="nav-item {{ ($title == 'home') ? 'active' : '' }}">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title == 'men') ? 'active' : '' }}"  href="#">Men</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title == 'women') ? 'active' : '' }}" href="#">Women</a>
            </li>
            <li class="nav-item {{ ($title == 'produks') ? 'active' : '' }}">
                <a class="nav-link" href="/produks">Edit Produk(admin)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
        </ul>
        <div class="navbar-nav flex-row order-md-last">
            <ul class="navbar-nav">
                {{-- <li class="nav-item">
                    <a class="nav-link" href="https://waskita.test">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="10" cy="10" r="7" />
                                <line x1="21" y1="21" x2="15" y2="15" />
                            </svg>
                        </span>
                    </a>
                </li> --}}

                {{-- <li class="nav-item">
                    <a class="nav-link" href="https://waskita.test/Form-Laporan-dan-Masukan.html">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/world -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="12" cy="12" r="9" />
                                <line x1="3.6" y1="9" x2="20.4" y2="9" />
                                <line x1="3.6" y1="15" x2="20.4" y2="15" />
                                <path d="M11.5 3a17 17 0 0 0 0 18" />
                                <path d="M12.5 3a17 17 0 0 1 0 18" />
                            </svg>
                        </span>
                    </a>
                </li> --}}
                {{-- <li class="nav-item" id='dosen-area'>
                    <a class="nav-link" href="http://waskita.test/dosen">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/basket -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <polyline points="7 10 12 4 17 10" />
                                <path d="M21 10l-2 8a2 2.5 0 0 1 -2 2h-10a2 2.5 0 0 1 -2 -2l-2 -8z" />
                                <circle cx="12" cy="15" r="2" />
                            </svg>
                        </span>
                    </a>
                </li> --}}
            </ul>
            <div class="nav-item d-none d-md-flex me-3">
                <div class="btn-list">
                </div>
            </div>
            
            <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <circle cx="12" cy="7" r="4" />
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                    </svg>
                </span>
                <div class="d-none d-xl-block ps-2">
                </div>
            </a>

            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="12" cy="7" r="4" />
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        </svg>
                    </span>
                    <div class="d-none d-xl-block ps-2">
                    </div>
                </a>
                
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <a href="https://umkm.test/profile.php" class="dropdown-item">Produk</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">Kotak Pesan</a>
                    <a href="http://umkm.test/landing.php" class="dropdown-item">Landing</a>
                    <a href="http://umkm.test/login.php" class="dropdown-item">Logout</a>
                </div>
            </div> --}}

        </div>
    </div>
    </div>
</header>