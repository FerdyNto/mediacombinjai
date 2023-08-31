@extends('dashboard.layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Profil Lembaga</h1>
                </div><!-- /.col -->
                <div class="col-sm-2 ms-auto">
                    {{-- <a href="{{ route('register') }}" class="btn btn-primary">Tambah Data Instruktur / Admin</a> --}}
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <form action="{{ route('dashboard.profil.update', ['id' => $data_lembaga->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @if (!$data_lembaga->gambar_lembaga)
                    <h3>Belum ada Gambar Lembaga</h3>
                @else
                    <div class="row">
                        <img src="{{ asset('/img/img asset') . '/' . $data_lembaga->gambar_lembaga }}" alt=""
                            class="col-4">
                        <div class="col-1 display-3 text-primary">
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </div>
                        <img src="" alt="" class="col-4" id="img-lembaga">
                    </div>
                @endif
                <div class="mb-3">

                    <label for="gambar-lembaga" class="form-label">Gambar Lembaga</label>
                    <input type="file" id="gambar-lembaga" name="gambar_lembaga" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="profil-lembaga" class="form-label">Profil Lembaga</label>
                    <textarea name="profil_lembaga" id="profil-lembaga" class="form-control">{{ $data_lembaga->profil_lembaga }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="sejarah-lembaga" class="form-label">Sejarah Lembaga</label>
                    <textarea name="sejarah_lembaga" id="sejarah-lembaga" class="form-control">{{ $data_lembaga->sejarah_lembaga }}</textarea>
                </div>
                @if (!$data_lembaga->foto_pimpinan)
                    <h3>Belum ada Foto Pimpinan</h3>
                @else
                    <div class="row">
                        <img src="{{ asset('/img/img asset') . '/' . $data_lembaga->foto_pimpinan }}" alt=""
                            class="col-3">
                        <div class="col-1 display-3 text-primary">
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </div>
                        <img src="" alt="" class="col-3" id="img-pimpinan">
                    </div>
                @endif
                <div class="mb-3">
                    <label for="foto-pimpinan" class="form-label">Foto Pimpinan</label>
                    <input type="file" id="foto-pimpinan" name="foto_pimpinan" class="form-control">
                </div>

                <div class="mb-3 d-grid">
                    <button type="submit" class="btn btn-primary">Update Profil Lembaga</button>
                </div>
            </form>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    <script>
        const img_lembaga = document.querySelector('#img-lembaga');
        const input_img_lembaga = document.querySelector('#gambar-lembaga');

        input_img_lembaga.addEventListener('change', () => {
            img_lembaga.src = URL.createObjectURL(input_img_lembaga.files[0]);
        });

        // Foto Pimpinan
        const img_pimpinan = document.querySelector('#img-pimpinan');
        const input_img_pimpinan = document.querySelector('#foto-pimpinan');

        input_img_pimpinan.addEventListener('change', () => {
            img_pimpinan.src = URL.createObjectURL(input_img_pimpinan.files[0]);
        });
    </script>
@endsection
