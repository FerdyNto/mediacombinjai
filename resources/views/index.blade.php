<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    {{-- Bootstrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    {{-- Font CSS --}}
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    {{-- Eksternal CSS --}}
    <link rel="stylesheet" href="{{ asset('css/public.css') }}">
    <title>Media Com</title>
</head>

<body>
    {{-- Header --}}
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('img/img logo/MEDIACOM.png') }}" alt="Media Com Binjai"
                        class="logo-mediacom-header">
                </a>
                <button class="navbar-toggler border-0 outline-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="fs-1 text-warning"><i class="bi bi-list"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item ms-md-3">
                            <a class="nav-link text-white fw-semibold active" aria-current="page"
                                href="#">Beranda</a>
                        </li>
                        <li class="nav-item dropdown ms-md-3">
                            <a class="nav-link dropdown-toggle text-white fw-semibold" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Profil
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Tentang Media Com</a></li>
                                <li><a class="dropdown-item" href="#">Staff dan Instruktur</a></li>
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
                                <li><a class="dropdown-item" href="#">Reguler</a></li>
                                <li><a class="dropdown-item" href="#">Profesi 1 Tahun</a></li>
                                <li><a class="dropdown-item" href="#">Prakerin / PKL</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    {{-- Akhir Header --}}

    {{-- Hero --}}
    <section id="hero">
        <div class="container">
            <div class="d-flex flex-column flex-lg-row mt-3 mt-lg-5 justify-content-lg-between align-items-lg-center">
                {{-- bagian kiri --}}
                <div class="left-side-hero">
                    <p class="fw-semibold">Ayo Khursus!!!</p>
                    <h1 class="fw-bold">The First and The Best</h1>
                    <p>Ayo Tingkatkan Skill Sesuai Kebutuhan Dunia Kerja</p>
                    <a href="#" class="btn fw-semibold">Cek Kelas</a>
                </div>
                {{-- /bagian kiri --}}

                {{-- bagian kanan --}}
                <div class="right-side-hero">
                    <img src="{{ asset('img/img asset/Media Com Binjai.png') }}" alt="Media Com Binjai"
                        class="img-fluid">
                </div>
                {{-- /bagian kanan --}}
            </div>
        </div>
    </section>
    {{-- Akhir Hero --}}


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
