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
            <a href="{{ route('dashboard.akreditasi') }}"
                class="nav-link {{ request()->is('dashboard/akreditasi') || request()->is('dashboard/create-akreditasi') ? 'active' : '' }}">Akreditasi</a>
        </li>
    </ul>

    <form action="{{ route('logout') }}" method="POST" class="d-inline ms-auto">
        @csrf
        <button class="btn btn-danger" type="submit">Keluar</button>
    </form>

</nav>
