@extends('layout.app')
@section('title','Santri')
@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">DataTable with default features</h3>
        </div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
            Launch Primary Modal
          </button>

        <!-- /.card-header -->
        <div class="card-body">
            <a href='' class="btn btn-primary">+ Tambah Data</a>
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Nama</th>
              <th>Kelas</th>
              <th>Alamat</th>
              <th>Tanggal Lahir</th>
              <th>Jenis Kelamin</th>
              <th>Email</th>
              <th>Nomor Telepon</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>Trident</td>
              <td>Internet
                Explorer 4.0
              </td>
              <td>Win 95+</td>
              <td> 4</td>
              <td>X</td>
              <td>X</td>
              <td>X</td>
              <td><a href='' class="btn btn-warning btn-sm">Edit</a>
                <a href='' class="btn btn-danger btn-sm">Delete</a></td>
            </tr>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>

<script type="module">
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endsection
