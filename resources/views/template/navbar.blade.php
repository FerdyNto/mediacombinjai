<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('img/img logo/MEDIACOM.png') }}" alt="Media Com Binjai" class="logo-mediacom-header">
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fs-1 text-white"><i class="bi bi-list"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item ms-md-3">
                        <a class="nav-link text-white fw-semibold" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item dropdown ms-md-3">
                        <a class="nav-link dropdown-toggle text-white fw-semibold" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('tentang_mediacom') }}">Tentang Media Com</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('struktur_organisasi') }}">Struktur
                                    Organisasi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item ms-md-3">
                        <a class="nav-link text-white fw-semibold" href="#">Artikel</a>
                    </li>
                    <li class="nav-item dropdown ms-md-3">
                        <a class="nav-link dropdown-toggle text-white fw-semibold" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Kelas
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('kelas_reguler') }}">Reguler</a></li>
                            <li><a class="dropdown-item" href="{{ route('profesi_satu_tahun') }}">Profesi 1 Tahun</a>
                            </li>
                            <li><a class="dropdown-item" href="#">Prakerin / PKL</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
