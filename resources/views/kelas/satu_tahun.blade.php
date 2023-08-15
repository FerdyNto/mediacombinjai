@extends('template.main')
@section('content-public')
    {{-- hero --}}
    <section id="hero-kelas" class="py-3 py-lg-5">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-between">
                {{-- bagian kiri --}}
                <div class="col-12 col-md-6 left">
                    <p class="fw-medium">Media Com Khurus</p>
                    <h1 class="fw-bold">Profesi Satu Tahun</h1>
                    <p>Program Berwirausaha dan Siap Kerja</p>
                    <a href="" class="btn fw-semibold">Hubungi Kami <span class="ms-3"><i
                                class="fa-brands fa-whatsapp"></i></span></a>
                </div>
                {{-- /bagian kiri --}}

                {{-- bagian kanan --}}
                <div class="col-12 col-md-6">
                    <img src="{{ asset('img/img asset/profesi 1 tahun.png') }}" alt="" class="img-fluid">
                </div>
                {{-- /bagian kanan --}}
            </div>
        </div>
    </section>
    {{-- akhir hero --}}

    {{-- Divisi Program --}}
    <section id="divisi" class="py-3 py-lg-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-semibold">Divisi Program Profesi 1 Tahun</h2>
            </div>

            {{-- divisi program detail --}}
            <div class="row mb-5">
                <div class="col-md-6">
                    <h3 class="fw-medium">Kelas Multimedia</h3>
                </div>
                <div class="col-md-6">
                    <h4 class="fw-medium mb-3">Materi yang akan diajarkan</h4>
                    <div class="fs-4">
                        <p><span class="me-3"><i class="fa-solid fa-circle-check"
                                    style="color: #37ae43;"></i></span>Desain Grafis
                        </p>
                        <p><span class="me-3"><i class="fa-solid fa-circle-check"
                                    style="color: #37ae43;"></i></span>Desain Grafis
                        </p>
                        <p><span class="me-3"><i class="fa-solid fa-circle-check"
                                    style="color: #37ae43;"></i></span>Desain Grafis
                        </p>
                        <p><span class="me-3"><i class="fa-solid fa-circle-check"
                                    style="color: #37ae43;"></i></span>Desain Grafis
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-6">
                    <h3 class="fw-medium">Kelas Multimedia</h3>
                </div>
                <div class="col-md-6">
                    <h4 class="fw-medium mb-3">Materi yang akan diajarkan</h4>
                    <div class="fs-4">
                        <p><span class="me-3"><i class="fa-solid fa-circle-check"
                                    style="color: #37ae43;"></i></span>Desain Grafis
                        </p>
                        <p><span class="me-3"><i class="fa-solid fa-circle-check"
                                    style="color: #37ae43;"></i></span>Desain Grafis
                        </p>
                        <p><span class="me-3"><i class="fa-solid fa-circle-check"
                                    style="color: #37ae43;"></i></span>Desain Grafis
                        </p>
                        <p><span class="me-3"><i class="fa-solid fa-circle-check"
                                    style="color: #37ae43;"></i></span>Desain Grafis
                        </p>
                    </div>
                </div>
            </div>
            {{-- akhir divisi program detail --}}

            {{-- syarat dan jadwal --}}
            <div class="row d-flex justify-content-md-between">
                <div class="card mb-3 border-0 col-12 col-md-6">
                    <div class="card-body">
                        <h4 class="card-title">Syarat Pendaftaran : </h4>
                        <div class="card-text">
                            <ul type="none" class="p-0">
                                <li>Lulusan SMA/SMK/MA Semua Jurusan</li>
                                <li>Lulusan SMA/SMK/MA Semua Jurusan</li>
                                <li>Lulusan SMA/SMK/MA Semua Jurusan</li>
                                <li>Lulusan SMA/SMK/MA Semua Jurusan</li>
                                <li>Lulusan SMA/SMK/MA Semua Jurusan</li>
                                <li>Lulusan SMA/SMK/MA Semua Jurusan</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card mb-3 border-0 col-12 col-md-5">
                    <div class="card-body">
                        <h4 class="card-title">Jadwal Pelatihan : </h4>
                        <div class="card-text">
                            <p>Sesi Pagi 09:00 s/d 12:00</p>
                            <p>Sesi siang 14:00 s/d 17:00</p>
                            <p>Kelas Eksekutif Jum'at & Sabtu</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- akhir syarat dan jadwal --}}
        </div>
    </section>
    {{-- AkhirDivisi Program --}}

    {{-- fasilitas --}}
    <section id="fasilitas" class="py-3 py-lg-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-semibold">Fasilitas Pelatihan</h2>
            </div>

            <div class="d-md-flex flex-md-wrap gap-md-3 gap-lg-4 justify-content-md-center">
                <p class="fw-medium">1 Kelas Terdiri dari 10 Peserta Pelatihan</p>
                <p class="fw-medium">1 Komputer 1 Peserta Pelatihan</p>
                <p class="fw-medium">Free Wifi</p>
                <p class="fw-medium">Alat dan Bahan Praktek</p>
                <p class="fw-medium">Jaket Almamater</p>
                <p class="fw-medium">KTP (Kartu Tanda Peserta Pelatihan)</p>
                <p class="fw-medium">Modul Pelatihan</p>
            </div>
        </div>
    </section>
    {{-- akhir fasilitas --}}

    {{-- biaya --}}
    <section id="biaya" class="py-3 py-lg-5">
        <div class="container">
            <div class="text-center mb-3">
                <h2 class="fw-semibold">Rincian Biaya</h2>
            </div>

            <div class="table-responsive">
                <table class="table mb-5">
                    <thead class="text-center align-middle">
                        <tr>
                            <th>Uang Pendaftaran</th>
                            <th>Total Biaya</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td>Rp. 200.000</td>
                            <td>Rp. 7.500.000,- Dapat Dicicil 3 kali, Pembayaran Sudah Termasuk Bahan Praktek</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="text-center mb-3">
                <h2 class="fw-semibold">URAIAN PENCICILAN BIAYA PENDIDIKAN PROFESI 1 TAHUN</h2>
            </div>
            <div class="table-responsive">
                <table class="table mb-5">
                    <thead class="text-center align-middle">
                        <tr>
                            <th>Uraian Pembayaran</th>
                            <th>Uraian Pembayaran</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td>Pertama</td>
                            <td>Rp. 3.000.000</td>
                            <td>Dibayar Pada Saat Registrasi</td>
                        </tr>
                        <tr>
                            <td>Kedua</td>
                            <td>Rp. 2.500.000</td>
                            <td>Dibayar Pada Saat UTS</td>
                        </tr>
                        <tr>
                            <td>Ketiga</td>
                            <td>Rp. 2.000.000</td>
                            <td>Dibayar Pada Saat UAS</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    {{-- akhir biaya --}}
@endsection
