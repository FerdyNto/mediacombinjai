@extends('dashboard.layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Akreditasi</h1>
                </div><!-- /.col -->
                <div class="col-sm-2 ms-auto">
                    <a href="{{ route('dashboard.akreditasi.create') }}" class="btn btn-primary">Tambah Akreditasi Baru</a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <table class="table table-hover table-bordered" id="tabelSaya">
                <thead>
                    <tr>
                        <th>Nama Akreditasi</th>
                        <th>Logo Akreditasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($akreditasi as $item)
                        <tr>
                            <td>{{ $item->nama_akreditasi }}</td>
                            <td>
                                <img src="{{ asset('img/akreditasi') . '/' . $item->logo_akreditasi }}"
                                    alt="{{ $item->nama_akreditasi }}" style="max-height: 150px">
                            </td>
                            <td>
                                <a href="{{ route('dashboard.akreditasi.edit', ['id' => $item->id]) }}"
                                    class="btn btn-warning">Edit</a>
                                <a href="{{ route('dashboard.akreditasi.destroy', ['id' => $item->id]) }}"
                                    data-confirm-delete="true" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
