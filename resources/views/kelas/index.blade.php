@extends('template.main')
@section('content-public')
    <section class="py-3 py-lg-5">
        <div class="container">
            <h1 class="text-center mb-3 fw-bold">Paket Kelas Media Com</h1>

            <div class="d-grid gap-3">
                <a href="{{ route('kelas_reguler') }}" class="btn btn-lg btn-outline-primary fw-semibold p-5">Reguler</a>
                <a href="" class="btn btn-lg btn-outline-primary fw-semibold p-5">Profesi 1 Tahun</a>
                <a href="" class="btn btn-lg btn-outline-primary fw-semibold p-5">PKL/PRAKERIN</a>
            </div>
        </div>
    </section>
@endsection
