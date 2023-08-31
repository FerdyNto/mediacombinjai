@extends('dashboard.layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Visi dan Misi</h1>
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
            <form action="{{ route('dashboard.visiMisi.update', ['id' => $visi_misi->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="visi">Visi</label>
                    <textarea name="visi" id="editor-saya" class="form-control">{{ $visi_misi->visi }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="misi">Misi</label>
                    <textarea name="misi" id="editor-saya" class="form-control">{{ $visi_misi->misi }}</textarea>
                </div>
                <div class="mb-3 d-grid">
                    <button type="submit" class="btn btn-primary">Update Visi & Misi</button>
                </div>
            </form>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
