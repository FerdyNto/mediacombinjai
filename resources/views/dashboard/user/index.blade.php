@extends('dashboard.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">User</h1>
                </div><!-- /.col -->
                <div class="col-sm-2 ms-auto">
                    <a href="{{ route('register') }}" class="btn btn-primary">Tambah Data Instruktur / Admin</a>
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
                        {{-- <th>No</th> --}}
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Jabatan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($data as $item)
                        <tr>
                            {{-- <td>{{ $no++ }}</td> --}}
                            <td>
                                @if (!$item->foto)
                                    <img src="{{ asset('img/profil') . '/' . 'foto profil.jpg' }}" alt="{{ $item->nama }}"
                                        class="img-thumbnail" width="100px">
                                @else
                                    <img src="{{ asset('img/profil') . '/' . $item->foto }}" alt="{{ $item->nama }}"
                                        class="img-thumbnail" width="100px">
                                @endif
                            </td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->username }}</td>
                            <td>{{ $item->jabatan }}</td>
                            <td>{{ $item->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- {{ $data->links() }} --}}
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
