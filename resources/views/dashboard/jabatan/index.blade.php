@extends('dashboard.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="mb-2 d-flex justify-content-between">
                <div>
                    <h1 class="m-0">Jabatan</h1>
                </div><!-- /.col -->
                <div>
                    <a href="{{ route('dashboard.jabatan.create') }}" class="btn btn-primary">Tambah Jabatan</a>
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
                        <th>Nama Jabatan</th>
                        <th>Tipe Jabatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jabatan as $item)
                        <tr>
                            <td>{{ $item->nama_jabatan }}</td>
                            <td>{{ $item->tipe_jabatan }}</td>
                            <td>
                                <a href="{{ route('dashboard.jabatan.edit', ['id' => $item->id]) }}"
                                    class="btn btn-warning">Edit</a>
                                <a href="{{ route('dashboard.jabatan.destroy', ['id' => $item->id]) }}"
                                    class="btn btn-danger" data-confirm-delete="true">Hapus</a>
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
