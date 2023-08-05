@extends('dashboard.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Jabatan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        {{-- <li class="breadcrumb-item"><a href="#">Home</a></li> --}}
                        {{-- <li class="breadcrumb-item active">Dashboard v3</li> --}}
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
          <table class="table table-hover table-bordered">
            <tr>
              <th>ID</th>
              <th>Nama Jabatan</th>
              <th>Tipe Jabatan</th>
            </tr>
            <tr>
              <td>1</td>
              <td>Pemrograman</td>
              <td>Instruktur</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Hardware</td>
              <td>Instruktur</td>
            </tr>
          </table> 
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
