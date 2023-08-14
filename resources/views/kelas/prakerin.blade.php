@extends('template.main')
@section('content-public')
    {{-- hero --}}
    <section id="hero-kelas" class="py-3 py-lg-5">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-between">
                {{-- bagian kiri --}}
                <div class="col-12 col-md-6 left">
                    <p class="fw-medium">Media Com Khurus</p>
                    <h1 class="fw-bold">Paket PRAKERIN / PKL</h1>
                    <p>Teknik Komputer dan Jaringan, Rekayasa Perangkat Lunak, Multimedia</p>
                    <a href="" class="btn fw-semibold">Hubungi Kami <span class="ms-3"><i
                                class="fa-brands fa-whatsapp"></i></span></a>
                </div>
                {{-- /bagian kiri --}}

                {{-- bagian kanan --}}
                <div class="col-12 col-md-5">
                    <img src="{{ asset('img/img asset/pkl.png') }}" alt="" class="img-fluid">
                </div>
                {{-- /bagian kanan --}}
            </div>
        </div>
    </section>
    {{-- akhir hero --}}

    {{-- jurusan --}}
    <section id="jurusan" class="py-3 py-lg-5">
        <div class="container">
            <div class="row d-flex flex-lg-row justify-content-lg-between align-items-lg-center jurusan">
                <div class="col-12 col-lg-4">
                    <h2 class="sing-jurusan text-wrap" style="color: #2dc23f;">TKJ</h2>
                    <p>Teknik Komputer & Jaringan</p>
                </div>

                <div class="col-12 col-lg-8 materi-prakerin">
                    <p><span class="me-3"><i class="fa-solid fa-circle-check" style="color: #37ae43;"></i></span>Komputer
                        (Hardware, Software, & Troubleshooting)</p>
                    <p><span class="me-3"><i class="fa-solid fa-circle-check" style="color: #37ae43;"></i></span>Jaringan
                        (Mikrotik)</p>
                    <p><span class="me-3"><i class="fa-solid fa-circle-check" style="color: #37ae43;"></i></span>Desain
                        Grafis (Vektor & Bitmap)</p>
                </div>
            </div>
            <div class="row d-flex flex-lg-row-reverse justify-content-lg-between align-items-lg-center jurusan">
                <div class="col-12 col-lg-4">
                    <h2 class="sing-jurusan text-break" style="color: #FF0000;">RPL</h2>
                    <p>Rekayasa Perangkat Lunak</p>
                </div>

                <div class="col-12 col-lg-8 materi-prakerin">
                    <p><span class="me-3"><i class="fa-solid fa-circle-check" style="color: #37ae43;"></i></span>Komputer
                        (Hardware, Software, & Troubleshooting)</p>
                    <p><span class="me-3"><i class="fa-solid fa-circle-check" style="color: #37ae43;"></i></span>Jaringan
                        (Mikrotik)</p>
                    <p><span class="me-3"><i class="fa-solid fa-circle-check" style="color: #37ae43;"></i></span>Desain
                        Grafis (Vektor & Bitmap)</p>
                </div>
            </div>
            <div class="row d-flex flex-lg-row justify-content-lg-between align-items-lg-center jurusan">
                <div class="col-12 col-lg-4">
                    <h2 class="sing-jurusan text-break" style="color: #1E7FDD;">MM</h2>
                    <p>Multimedia</p>
                </div>

                <div class="col-12 col-lg-8 materi-prakerin">
                    <p><span class="me-3"><i class="fa-solid fa-circle-check" style="color: #37ae43;"></i></span>Komputer
                        (Hardware, Software, & Troubleshooting)</p>
                    <p><span class="me-3"><i class="fa-solid fa-circle-check" style="color: #37ae43;"></i></span>Jaringan
                        (Mikrotik)</p>
                    <p><span class="me-3"><i class="fa-solid fa-circle-check" style="color: #37ae43;"></i></span>Desain
                        Grafis (Vektor & Bitmap)</p>
                </div>
            </div>
        </div>
    </section>
    {{-- akhir jurusan --}}

    {{-- biaya --}}
    <section id="biaya-pkl" class="py-3 py-lg-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-medium">Biaya Paket PRAKERIN / PKL</h2>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th>Uang Pendaftaran</th>
                            <th>Biaya Pendidikan</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td>Rp. 50.000</td>
                            <td>Rp. 200.000 / Bulan</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="text-center">
                <p class="fs-4">Pelaksanaan disesuaikan dengan jadwal sekolah</p>
            </div>
        </div>
    </section>
    {{-- akhir biaya --}}
@endsection
