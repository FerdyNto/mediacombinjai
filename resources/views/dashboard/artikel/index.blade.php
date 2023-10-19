@extends('dashboard.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Artikel</h1>
                </div><!-- /.col -->
                <div class="col-sm-2 ms-auto">
                    <a href="{{ route('dashboard.artikel.create') }}" class="btn btn-primary">Tambah Artikel Baru</a>
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
                        <th>No</th>
                        <th>Judul Artikel</th>
                        <th class="col-2">Gambar</th>
                        <th>Body Artikel</th>
                        <th>Tanggal Post</th>
                        <th>Penulis</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($artikels as $artikel)
                        <tr>
                            <td>{{ $artikel->id }}</td>
                            <td>{{ $artikel->judul }}</td>
                            <td>
                                @if (!$artikel->gambar)
                                    <p>Tidak ada Gambar</p>
                                @else
                                    <img src="{{ asset('img/artikels') . '/' . $artikel->gambar }}"
                                        alt="{{ $artikel->judul }}" width="100%">
                                @endif
                            </td>
                            <td>{!! $artikel->body !!}</td>

                            <td>{{ $artikel->created_at }}</td>
                            <td>{{ $artikel->user_id }}</td>
                            <td>
                                <a href="{{ route('dashboard.artikel.edit', ['id' => $artikel->id]) }}"
                                    class="btn btn-warning">Edit</a>
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
