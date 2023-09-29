<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('dashboard.profil') }}"
                class="nav-link {{ request()->is('dashboard/profil-lembaga') ? 'active' : '' }}">Profil Lembaga</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('dashboard.visiMisi') }}"
                class="nav-link {{ request()->is('dashboard/visi-misi') ? 'active' : '' }}">Visi & Misi</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('dashboard.akreditasi.index') }}"
                class="nav-link {{ request()->routeIs('dashboard.akreditasi.*') ? 'active' : '' }}">Akreditasi</a>
        </li>
    </ul>

    <div class="dropdown ms-auto me-3">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Setting <span><i class="fa-solid fa-gear"></i></span>
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('dashboard.user.config', ['id' => Auth::user()->id]) }}">Ubah
                    Profil</a>
            </li>
            <li><a class="dropdown-item" href="#">Ubah Password</a></li>
        </ul>
    </div>
    <form action="{{ route('logout') }}" method="POST" class="d-inline me-3">
        @csrf
        <button class="btn btn-danger" type="submit">Keluar</button>
    </form>

</nav>
