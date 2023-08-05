@extends('template.main')
@section('content-public')
    <section id="profil-mediacom-tentang" class="py-3 py-lg-5">
        <div class="container">
            <h1 class="text-center fw-bold mb-3">Tentang Media Com Binjai</h1>
            <div class="row">
                <img src="{{ asset('img/img asset/tentang Media Com 1.png') }}" alt="Tentang Media Com" class="img-fluid">
            </div>

            {{-- Profil Lembaga --}}
            <div class="row py-3 mt-md-5">
                {{-- Header profil --}}
                <div class="col-12 col-lg-4">
                    <h2 class="fw-semibold mb-3">Profil Lembaga</h2>
                </div>
                <div class="col-12 col-lg-8">
                    <p class="mb-2">Nama Lembaga : Media Com Binjai</p>
                    <p class="mb-2">Nomor Induk Lembaga Khursus : 07201.4.1.0057</p>
                    <p class="mb-2">Izin Dinas Pendidikan : 421.9-5244 Tanggal 12 Agustus 2015</p>
                    <p class="mb-2">Izin Dinas Tenaga Kerja : SER.563-01-03/DSTK/III/2015</p>
                    <p class="mb-2">Alamat : Jl. Danau Baratan 1 No. 67C Kota Binjai</p>
                    <p class="mb-2">Telp : 061-8820365</p>
                    <p class="mb-2">Whatsapp : +62 813 6172 1169</p>
                </div>
            </div>

            {{-- Akreditasi --}}
            <div class="row py-3 mt-md-5">
                {{-- header profil --}}
                <div class="col-12 col-lg-4">
                    <h2 class="fw-semibold mb-3">Akreditasi</h2>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="d-flex flex-wrap">
                        <img src="{{ asset('img/akreditasi/Akreditasi LA 1.png') }}" alt=""
                            class="img-akreditas me-5">
                        <img src="{{ asset('img/akreditasi/Logo Penilaian Kinerja1 1.png') }}" alt=""
                            class="img-akreditas">
                    </div>
                </div>
            </div>

            {{-- Sejarah --}}
            <div class="row py-3 mt-md-5">
                {{-- header-profil --}}
                <div class="col-12">
                    <h2 class="fw-semibold mb-3 text-center">Sejarah Media Com</h2>
                </div>

                <div class="d-flex flex-column flex-md-row align-items-center justify-content-md-between">
                    <div class="col-md-7">
                        <p>Lembaga Pendidikan Pelatihan dan Keterampilan Komputer Media Com Binjai didirikan pada tanggal 25
                            Mei 2010 di kota Binjai, Sumatera Utara.</p>
                        <p>Landasan pendirian lembaga ini adalah untuk mempersiapkan dan meningkatkan keahlian sumber daya
                            manusia (SDM) sesuai dengan kebutuhan dunia kerja melalui pelatihan keterampilan, ilmu
                            pengetahuan terapan serta pengembangan sikap dan perilaku kerja profesional</p>
                        <p>Media Com Binjai menyelenggarakan beberapa jenis pelatihan meliputi : Teknisi Komputer
                            (Hardware), Teknisi Komputer Jaringan (LAN), Web Desain (Pemrograman Web), Desain Grafis (Vektor
                            dan Bitmap), Video shooting dan Editing (Multimedia), Komputer Akuntansi (MYOB), Aplikasi
                            Perkantoran (MS Office) dan Paket Kerja Industri (Prakerin) bagi murid SMK yang ingin
                            melaksanakan Prakerin di Media Com Binjai.</p>
                    </div>
                    <div>
                        <img src="{{ asset('img/img asset/Pimpinan Mediacom.png') }}" alt="" class="img-pimpinan">
                    </div>
                </div>
            </div>

            {{-- Visi Misi --}}
            <div class="row py-3 mt-md-5">
                <div class="col-12">
                    <h2 class="fw-semibold mb-3 text-center">Visi</h2>
                </div>

                <div class="visi">
                    <p>Menjadi Pusat Pendidikan Dan Pelatihan Yang Unggul Dalam Intelektual Dan Mahir Dalam Keterampilan</p>
                </div>

                <div class="col-12">
                    <h2 class="fw-semibold mb-3 text-center">Misi</h2>
                </div>

                <div class="misi">
                    <p>Menyelenggarakan Pendidikan, Pelatihan dan Keterampilan di Bidang Informasi dan Komputer untuk
                        menghasilkan SDM yang profesional di bidang Teknologi Informasi dan Komunikasi serta taat kepada
                        Allah
                        Tuhan Yang Esa.</p>
                    <p>Menyelenggarakan pengembangan dan pengabdian pada masyarakat di bidang pendidikan teknologi dan
                        komunikasi.</p>
                    <p>Menyelenggarakan pelayanan jasa di bidang Teknologi Informasi dan Komunikasi.</p>
                </div>
            </div>

        </div>
    </section>
@endsection
