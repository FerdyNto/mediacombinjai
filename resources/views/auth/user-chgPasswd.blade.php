@extends('auth.authTemplate')
@section('auth')
    <div class="container">
        <div class="d-flex align-items-center justify-content-center flex-md-column mx-auto"
            style="height: 100vh; width:500px">
            {{-- <img src="{{ asset('/') . 'img/img logo/LOGO MEDIACOM.png' }}" alt="Logo Media Com" width="250px" class="mb-5"> --}}

            <form action="{{ route('dashboard.user.update.password') }}"
                class="col-12 border border-secondary-subtle bg-white p-3" enctype="multipart/form-data" method="POST">
                <h2 class="mb-3">Ubah Password</h2>
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="password-lama" class="form-label">Password Lama</label>
                    <input type="password" id="password-lama" name="password_lama" class="form-control">
                    @error('password_lama')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password-baru" class="form-label">Password Baru</label>
                    <input type="password" id="password-baru" name="password_baru" class="form-control">
                    @error('password_baru')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="c-password" class="form-label">Konfirmasi Password Baru</label>
                    <input type="password" id="c-password" name="c_password" class="form-control">
                    @error('c_password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3 d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Ubah Profil</button>
                    <a href="{{ route('dashboard') }}" class="btn btn-secondary">kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
