@extends('template.main')
@section('content-public')
    <section id="profil-mediacom-struktur" class="py-3 py-lg-5">
        <div class="container">
            <div class="row">
                <h1 class="text-center fw-bold mb-3">Struktur Organisasi Media Com Binjai</h1>
            </div>

            <div class="d-flex flex-wrap gap-3 gap-lg-5 justify-content-around justify-content-md-center">
                @foreach ($user as $item)
                    <div class="col-10 col-md-12 col-lg-5 bg-white p-1 rounded-4 row align-items-center">
                        <div class="col-12 col-md-5 mb-3 mb-md-0">
                            @if (!$item->foto)
                                <img src="{{ asset('img/profil') . '/' . 'foto profil.jpg' }}" alt="{{ $item->nama }}"
                                    class="img-thumbnail rounded-circle">
                            @else
                                <img src="{{ asset('img/profil') . '/' . $item->foto }}" alt="{{ $item->nama }}"
                                    class="img-thumbnail rounded-circle">
                            @endif
                        </div>
                        <div class="col-12 col-md-7 detail-struktur">
                            <h4 class="fw-semibold">{{ $item->nama }}</h4>
                            <h5 class="fw-medium">{{ $item->jabatan }}</h5>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
