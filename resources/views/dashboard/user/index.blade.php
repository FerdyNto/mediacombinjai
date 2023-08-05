@extends('dashboard.layouts.main')

@section('content')
<h1 style="center">Daftar User</h1>
<table class="table table-hover table-bordered">
    <tr>
      <th>ID</th>
      <th>Username</th>
      <th>Password</th>
      <th>Nama</th>
      <th>ID Jabatan</th>
      <th>Status</th>
      <th>Foto</th>
    </tr>
    <tr>
      <td>1</td>
      <td>Maria Anders</td>
      <td>******</td>
      <td>Butet Sinembah</td>
      <td>0111001100</td>
      <td>Aktif</td>
      <td>T_T</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Francisco Chang</td>
      <td>******</td>
      <td>Simbah Afrika</td>
      <td>0111010010</td>
      <td>Aktif</td>
      <td>^_^</td>
    </tr>
  </table> 
@endsection