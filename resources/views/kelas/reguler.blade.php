@extends('template.main')
@section('content-public')
    {{-- hero kelas reguler --}}
    <section id="kelas-reguler" class="py-3 py-lg-5">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-between">
                {{-- bagian kiri --}}
                <div class="col-12 col-md-6 left-reguler">
                    <p class="fw-medium">Media Com Khurus</p>
                    <h1 class="fw-bold">Reguler / Privat</h1>
                    <p>Program Bidang Kompetensi dan Siap Kerja</p>
                    <a href="" class="btn fw-semibold">Hubungi Kami <span class="ms-3"><i
                                class="fa-brands fa-whatsapp"></i></span></a>
                </div>
                {{-- /bagian kiri --}}

                {{-- bagian kanan --}}
                <div class="col-12 col-md-6">
                    <img src="{{ asset('img/img asset/kelas reguler.png') }}" alt="Kelas Reguler / Privat"
                        class="img-fluid">
                </div>
                {{-- /bagian kanan --}}
            </div>
        </div>
    </section>
    {{-- akhir hero kelas reguler --}}

    {{-- bidang pelatihan --}}
    <section id="bidang-pelatihan" class="py-3 py-lg-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2>Paket Bidang Pelatihan</h2>
            </div>

            <div class="d-flex flex-wrap flex-column flex-md-row justify-content-around gap-5">
                <div class="col-12 col-md-5 paket bg-white p-2 rounded">
                    <h3 class="fw-medium">Teknik Komputer (Hardware)</h3>
                    <p class="fw-medium">Biaya Pendidikan Rp. 950.000</p>
                    <p class="fw-medium">Durasi 2 Jam / Pertemuan</p>
                    <p class="fw-medium">20 Pertemuan</p>
                    <p class="fw-medium">Waktu Sesuai Kesepakatan Dengan Instruktur</p>
                    <a href="" class="btn fw-medium">Ajukan Pertanyaan / Daftar</a>
                </div>
                <div class="col-12 col-md-5 paket bg-white p-2 rounded">
                    <h3 class="fw-medium">Teknik Komputer (Hardware)</h3>
                    <p class="fw-medium">Biaya Pendidikan Rp. 950.000</p>
                    <p class="fw-medium">Durasi 2 Jam / Pertemuan</p>
                    <p class="fw-medium">20 Pertemuan</p>
                    <p class="fw-medium">Waktu Sesuai Kesepakatan Dengan Instruktur</p>
                    <a href="" class="btn fw-medium">Ajukan Pertanyaan / Daftar</a>
                </div>
                <div class="col-12 col-md-5 paket bg-white p-2 rounded">
                    <h3 class="fw-medium">Teknik Komputer (Hardware)</h3>
                    <p class="fw-medium">Biaya Pendidikan Rp. 950.000</p>
                    <p class="fw-medium">Durasi 2 Jam / Pertemuan</p>
                    <p class="fw-medium">20 Pertemuan</p>
                    <p class="fw-medium">Waktu Sesuai Kesepakatan Dengan Instruktur</p>
                    <a href="" class="btn fw-medium">Ajukan Pertanyaan / Daftar</a>
                </div>
                <div class="col-12 col-md-5 paket bg-white p-2 rounded">
                    <h3 class="fw-medium">Teknik Komputer (Hardware)</h3>
                    <p class="fw-medium">Biaya Pendidikan Rp. 950.000</p>
                    <p class="fw-medium">Durasi 2 Jam / Pertemuan</p>
                    <p class="fw-medium">20 Pertemuan</p>
                    <p class="fw-medium">Waktu Sesuai Kesepakatan Dengan Instruktur</p>
                    <a href="" class="btn fw-medium">Ajukan Pertanyaan / Daftar</a>
                </div>
                <div class="col-12 col-md-5 paket bg-white p-2 rounded">
                    <h3 class="fw-medium">Teknik Komputer (Hardware)</h3>
                    <p class="fw-medium">Biaya Pendidikan Rp. 950.000</p>
                    <p class="fw-medium">Durasi 2 Jam / Pertemuan</p>
                    <p class="fw-medium">20 Pertemuan</p>
                    <p class="fw-medium">Waktu Sesuai Kesepakatan Dengan Instruktur</p>
                    <a href="" class="btn fw-medium">Ajukan Pertanyaan / Daftar</a>
                </div>
                <div class="col-12 col-md-5 paket bg-white p-2 rounded">
                    <h3 class="fw-medium">Teknik Komputer (Hardware)</h3>
                    <p class="fw-medium">Biaya Pendidikan Rp. 950.000</p>
                    <p class="fw-medium">Durasi 2 Jam / Pertemuan</p>
                    <p class="fw-medium">20 Pertemuan</p>
                    <p class="fw-medium">Waktu Sesuai Kesepakatan Dengan Instruktur</p>
                    <a href="" class="btn fw-medium">Ajukan Pertanyaan / Daftar</a>
                </div>
            </div>
        </div>
    </section>
    {{-- akhir bidang pelatihan --}}
@endsection
