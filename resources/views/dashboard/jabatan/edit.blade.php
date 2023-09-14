@extends('dashboard.layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-1">
                    <a href="{{ route('dashboard.jabatan.index') }}" class="btn btn-secondary">Kembali</a>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <h1 class="m-0">Form Edit Jabatan</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    {{-- Main Content --}}
    <div class="content">
        <div class="container-fluid">
            <form action="{{ route('dashboard.jabatan.update', ['id' => $jabatan->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama-jabatan" class="form-label">Nama Jabatan</label>
                    <input type="text" id="nama-jabatan" name="nama_jabatan" class="form-control"
                        value="{{ $jabatan->nama_jabatan }}">
                </div>

                <div class="mb-3">
                    <label for="tipe-jabatan">Tipe Jabatan</label>
                    <select class="form-select" aria-label="Default select" name="tipe_jabatan" id="tipe-jabatan">
                        <option>Pilih Tipe Jabatan</option>
                        <option value="Admin" {{ $jabatan->tipe_jabatan === 'Admin' ? 'selected' : '' }}>Admin</option>
                        <option value="Instruktur" {{ $jabatan->tipe_jabatan === 'Instruktur' ? 'selected' : '' }}>
                            Instruktur</option>
                    </select>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </div>

            </form>
        </div>
    </div>
@endsection
