@extends('dashboard.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Artikel </h1>
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
          <table class="table table-hover table-bordered border-primary">
            <tr>
              <th>No</th>
              <th>Judul</th>
              <th>Slug</th>
              <th>Body</th>
              <th>Gambar</th>
              <th>Create_at</th>
              <th>ID User</th>
            </tr>
            <tr>
              <td>1</td>
              <td>akreditas</td>
              <td>bisa</td>
              <td>merah</td>
              <td>*_*</td>
              <td>submit</td>
              <td>19763272</td>
            </tr>
            <tr>
              <td>2</td>
              <td>akreditas</td>
              <td>bisa</td>
              <td>merah</td>
              <td><img src="artikel" alt="BOB.jpeg"></td>
              <td>submit</td>
              <td>19763354</td>
            </tr>
          </table>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
