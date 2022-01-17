<header class="navbar navbar-expand-md navbar-light d-print-none">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href="/">
                <img src="img/logo.png" width="110" height="32" alt="Tabler" class="navbar-brand-image">
            </a>
        </h1>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ ($title == 'home') ? 'active' : '' }}">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title == 'Men') ? 'active' : '' }}"  href="/men">Men</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title == 'Women') ? 'active' : '' }}" href="/women">Women</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title == 'About') ? 'active' : '' }}" href="/about">About</a>
            </li>
        </ul>

        <ul class="navbar-nav ms-auto">
            @auth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome back, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/profile"><i class="bi bi-layout-text-sidebar-reverse"></i>My Profile</a></li>
                  <li><a class="dropdown-item" href="/produks"><i class="bi bi-layout-text-sidebar-reverse"></i>Edit Produk(admin)</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form action="/logout" method="POST">
                      @csrf
                      <button type="submit" class="dropdown-item">
                        <i class="bi bi-box-arrow-right">
                        </i> Logout
                      </button>
                    </form>
                  </li>
                </ul>
              </li>
            @else
              <li class="nav-item">
                <a href="/login" class="nav-link  {{ ($title == "login") ? 'active' : '' }}">
                  <i class="bi bi-box-arrow-in-right"></i>
                  Login</a>
              </li>
            @endauth
        </ul>

        {{-- <div class="navbar-nav flex-row order-md-last">
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

        </div> --}}
    </div>
    </div>
</header>