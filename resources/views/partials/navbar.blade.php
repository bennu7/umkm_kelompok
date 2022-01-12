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
            <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                <span class="nav-link-icon d-md-none d-lg-inline-block active">
                    <li class="nav-item {{ ($title == 'login' || 'register') ? 'active' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="12" cy="7" r="4" />
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        </svg>
                    </li>
                </span>
                <div class="d-none d-xl-block ps-2">
                </div>
            </a>

        </div>
    </div>
    </div>
</header>