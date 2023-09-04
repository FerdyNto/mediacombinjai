@extends('dashboard.layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-1">
                    <a href="{{ route('dashboard.akreditasi') }}" class="btn btn-secondary">Kembali</a>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <h1 class="m-0">Form Akreditasi Baru</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    {{-- Main Content --}}
    <div class="content">
        <div class="container-fluid">
            <form action="{{ route('dashboard.akreditasi.update', ['id' => $akreditasi->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama-akreditasi" class="form-label">Nama Akreditasi</label>
                    <input type="text" id="nama-akreditasi" name="nama_akreditasi" class="form-control"
                        value="{{ $akreditasi->nama_akreditasi }}">
                </div>

                <img src="{{ asset('img/akreditasi') . '/' . $akreditasi->logo_akreditasi }}" alt="" id="img"
                    class="col-3">
                <div class="mb-3">
                    <label for="logo-akreditasi">Logo Akreditasi</label>
                    <input type="file" id="logo-akreditasi" name="logo_akreditasi" class="form-control">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </div>

            </form>
        </div>
    </div>

    <script>
        const img = document.querySelector('#img');
        const input_img = document.querySelector('#logo-akreditasi');

        input_img.addEventListener('change', () => {
            img.src = URL.createObjectURL(input_img.files[0]);
        });
    </script>
@endsection
