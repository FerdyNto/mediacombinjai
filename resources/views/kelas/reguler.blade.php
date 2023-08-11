@extends('template.main')
@section('content-public')
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
@endsection
