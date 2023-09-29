@extends('auth.authTemplate')
@section('auth')
    <div class="container">
        <div class="d-flex align-items-center justify-content-center flex-md-column mx-auto"
            style="height: 100vh; width:500px">
            {{-- <img src="{{ asset('/') . 'img/img logo/LOGO MEDIACOM.png' }}" alt="Logo Media Com" width="250px" class="mb-5"> --}}

            {{-- @dd($user) --}}
            {{-- @dd($user->userJabatan->id) --}}
            <form action="{{ route('dashboard.user.update', ['id' => $user->id]) }}"
                class="col-12 border border-secondary-subtle bg-white p-3" enctype="multipart/form-data" method="POST">
                <h2 class="mb-3">Akun Setting</h2>
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" name="username" class="form-control" value="{{ $user->username }}">
                    @error('username')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Instruktur</label>
                    <input type="text" id="nama" name="nama" class="form-control" value="{{ $user->nama }}">
                    @error('nama')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="jabatan" class="form-label">Jabatan</label>
                    {{-- <input type="text" id="jabatan" name="jabatan" class="form-control"> --}}
                    <select class="form-select" aria-label="Default select" id="jabatan" name="jabatan">
                        <option>Pilih Jabatan</option>
                        @foreach ($jabatan as $item)
                            <option value="{{ $item->id }}" @if ($user->userJabatan->id === $item->id) selected @endif>
                                {{ $item->nama_jabatan }}</option>
                        @endforeach
                    </select>
                </div>

                @if (!$user->foto)
                    <img src="{{ asset('/') . 'img/profil/foto profil.jpg' }}" alt="foto profil" id="img"
                        class="col-3">
                @else
                    <img src="{{ asset('/') . 'img/profil/' . $user->foto }}" alt="{{ $user->nama }}" id="img"
                        class="col-3">
                @endif
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" id="foto" name="foto" class="form-control">
                </div>

                <input type="hidden" name="status" value="aktif">

                <div class="mb-3 d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Ubah</button>
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
