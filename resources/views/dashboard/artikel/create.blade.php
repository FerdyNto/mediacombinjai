@extends('dashboard.layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-1">
                    <a href="{{ route('dashboard.artikel.index') }}" class="btn btn-secondary">Kembali</a>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <h1 class="m-0">Form Tambah Artikel Baru</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    {{-- Main Content --}}
    <div class="content">
        <div class="container-fluid">
            <form action="{{ route('dashboard.artikel.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="judul-artikel" class="form-label">Judul Artikel</label>
                    <input type="text" id="judul-artikel" name="judul_artikel" class="form-control"
                        value="{{ old('judul_artikel') }}">
                    @error('judul_artikel')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>

                {{-- <div class="mb-3">
                    <input type="hidden" id="slug" name="slug" class="form-control">
                </div> --}}

                <div class="mb-3">
                    <label for="body" class="form-label">Isi Artikel</label>
                    <textarea name="body" id="body">{{ old('body') }}</textarea>
                    @error('body')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label><br>
                    <img src="{{ asset('img/artikels') . '/' . $artikel->gambar }}" alt="" id="img"
                        class="col-3 mb-3">
                    <input type="file" id="gambar" name="gambar" class="form-control">
                    @error('gambar')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="penulis" class="form-label">Penulis</label>
                    <input type="text" id="penulis" name="penulis" class="form-control" readonly
                        value="{{ Auth::user()->nama }}">
                </div>



                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>

            </form>
        </div>
    </div>

    {{-- <script>
        function createTextSlug() {
            var judul = document.getElementById("judul-artikel").value;
            document.getElementById("slug").value = generateSlug(judul);
        }

        function generateSlug(text) {
            return text.toString().toLowerCase()
                .replace(/^-+/, '')
                .replace(/-+$/, '')
                .replace(/\s+/g, '-')
                .replace(/\-\-+/g, '-')
                .replace(/[^\w\-]+/g, '');
        }
    </script> --}}

    <script>
        const img = document.querySelector('#img');
        const input_img = document.querySelector('#gambar');

        input_img.addEventListener('change', () => {
            img.src = URL.createObjectURL(input_img.files[0]);
        });
    </script>
@endsection
