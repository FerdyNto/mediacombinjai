@extends('auth.authTemplate')
@section('auth')
    <div class="container">
        <div class="d-flex align-items-center justify-content-center flex-md-column mx-auto"
            style="height: 100vh; width:500px">
            <img src="{{ asset('/') . 'img/img logo/LOGO MEDIACOM.png' }}" alt="Logo Media Com" width="250px" class="mb-5">

            <form action="{{ route('register.create') }}" class="col-12 border border-secondary-subtle bg-white p-3"
                enctype="multipart/form-data" method="POST">
                <h2 class="mb-3">Register Admin / Instruktur</h2>
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" name="username" class="form-control" value="{{ old('username') }}">
                    @error('username')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="c-password" class="form-label">Konfirmasi Password</label>
                    <input type="password" id="c-password" name="c-password" class="form-control">
                    @error('c-password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Instruktur</label>
                    <input type="text" id="nama" name="nama" class="form-control" value="{{ old('nama') }}">
                    @error('nama')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="jabatan" class="form-label">Jabatan</label>
                    {{-- <input type="text" id="jabatan" name="jabatan" class="form-control"> --}}
                    <select class="form-select" aria-label="Default select" id="jabatan" name="jabatan">
                        <option selected>Pilih Jabatan</option>
                        @foreach ($jabatan as $item)
                            <option value="{{ $item->id }}">{{ $item->nama_jabatan }}</option>
                        @endforeach
                    </select>
                </div>

                <img src="" alt="" id="img" class="col-3">
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" id="foto" name="foto" class="form-control">
                </div>

                <input type="hidden" name="status" value="aktif">

                <div class="mb-3 d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Daftar</button>
                    <a href="{{ route('dashboard.users.index') }}" class="btn btn-secondary">kembali</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        const img = document.querySelector('#img');
        const input_img = document.querySelector('#foto');

        input_img.addEventListener('change', () => {
            img.src = URL.createObjectURL(input_img.files[0]);
        });
    </script>
@endsection
