@extends('auth.authTemplate')
@section('auth')
    <div class="container">
        <div class="d-flex align-items-center justify-content-center flex-md-column mx-auto"
            style="height: 100vh; width:500px">
            <img src="{{ asset('/') . 'img/img logo/LOGO MEDIACOM.png' }}" alt="Logo Media Com" width="250px" class="mb-5">

            <form action="" class="col-12 border border-secondary-subtle bg-white p-3" enctype="multipart/form-data">
                <h2 class="mb-3">Register Admin / Instruktur</h2>
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" name="username" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="c-password" class="form-label">Konfirmasi Password</label>
                    <input type="password" id="c-password" name="c-password" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Instruktur</label>
                    <input type="text" id="nama" name="nama" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="jabatan" class="form-label">Jabatan</label>
                    <input type="text" id="jabatan" name="jabatan" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" id="foto" name="foto" class="form-control">
                </div>

                <div class="mb-3 d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Daftar</button>
                    <a href="{{ route('dashboard.users') }}" class="btn btn-secondary">kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
