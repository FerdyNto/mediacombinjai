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
    <section id="hero" class="py-3 py-lg-5">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
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

    {{-- Paket Pelatihan --}}
    <section id="pelatihan" class="py-3 py-lg-5">
        <div class="container">
            <div class="text-center header-pelatihan mb-5">
                <h2 class="fw-semibold">PAKET PELATIHAN</h2>
                <p class="fw-semibold">Asah Bidang Kompetensi yang Anda Inginkan</p>
            </div>

            <div>
                <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-center mb-5 mb-md-5">
                    <div class="mb-3 header-pelatihan-item">
                        <img src="{{ asset('img/img pelatihan/Teknik Komputer.png') }}" alt="Teknik Komputer"
                            class="img-pelatihan">
                    </div>
                    <div class="deskripsi-pelatihan">
                        <h3 class="fw-bold">Teknisi Komputer (Hardware)</h3>
                        <div class="fw-medium ">
                            <p>Memperbaiki, Menganalisa Kerusakan Pada PC/Laptop, Memahami bagaimana seorang teknisi
                                komputer itu mampu mengatasi permasalahan yang terjadi pada PC/Laptop</p>
                        </div>
                    </div>
                </div>
                <div
                    class="d-flex flex-column flex-md-row-reverse justify-content-md-between align-items-center mb-5 mb-md-5">
                    <div class="mb-3 header-pelatihan-item">
                        <img src="{{ asset('img/img pelatihan/Teknik Komputer Jaringan.png') }}"
                            alt="Teknik Komputer Jaringan" class="img-pelatihan">
                    </div>
                    <div class="deskripsi-pelatihan">
                        <h3 class="fw-bold">Teknisi Komputer Jaringan(LAN)</h3>
                        <div class="fw-medium ">
                            <p>Mampu membuat jaringan lokal, memahami dan menganalisa dalam pembuatan Jaringan Komputer.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-center mb-5 mb-md-5">
                    <div class="mb-3 header-pelatihan-item">
                        <img src="{{ asset('img/img pelatihan/Desain Grafis.png') }}" alt="Teknik Komputer"
                            class="img-pelatihan">
                    </div>
                    <div class="deskripsi-pelatihan">
                        <h3 class="fw-bold">Desain Grafis (Vektor & Bitmap)</h3>
                        <div class="fw-medium ">
                            <p>Belajar mendesain yang hasilnya akan diterapkan pada kebutuhan masyarakat seperti
                                stempel, undangan, spanduk, dll</p>
                        </div>
                    </div>
                </div>
                <div
                    class="d-flex flex-column flex-md-row-reverse justify-content-md-between align-items-center mb-5 mb-md-5">
                    <div class="mb-3 header-pelatihan-item">
                        <img src="{{ asset('img/img pelatihan/Pemrograman.png') }}" alt="Teknik Komputer"
                            class="img-pelatihan">
                    </div>
                    <div class="deskripsi-pelatihan">
                        <h3 class="fw-bold">Pemrograman WEB</h3>
                        <div class="fw-medium ">
                            <p>Membuat dan memahami desain pada website yang akan dibuat serta memahami bahasa
                                pemrograman apa yang akan digunakan.</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-center mb-5 mb-md-5">
                    <div class="mb-3 header-pelatihan-item">
                        <img src="{{ asset('img/img pelatihan/Akuntansi.png') }}" alt="Teknik Komputer"
                            class="img-pelatihan">
                    </div>
                    <div class="deskripsi-pelatihan">
                        <h3 class="fw-bold">Akuntansi</h3>
                        <div class="fw-medium ">
                            <p>Belajar perhitungan menggunakan myob dengan analisa yang perlu diperhitungkan agar dapat
                                mendapatkan hasil yang balance.</p>
                        </div>
                    </div>
                </div>
                <div
                    class="d-flex flex-column flex-md-row-reverse justify-content-md-between align-items-center mb-5 mb-md-5">
                    <div class="mb-3 header-pelatihan-item">
                        <img src="{{ asset('img/img pelatihan/Aplikasi Perkantoran.png') }}" alt="Teknik Komputer"
                            class="img-pelatihan">
                    </div>
                    <div class="deskripsi-pelatihan">
                        <h3 class="fw-bold">Aplikasi Perkantoran (MS Office)</h3>
                        <div class="fw-medium ">
                            <p>Belajar menggunakan aplikasi perkantoran yang diperlukan seperti word, excel dan power
                                point dengan memaksimalkan keampuhan kompetensi yang dimiliki.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Akhir Paket Pelatihan --}}


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
