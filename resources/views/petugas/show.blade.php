@extends('master')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>General Form</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Table Data Petugas</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Data Anggota</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
                <div class="card-body">
                  <div class="form-group">
                    <label for="id">id</label>
                    <input type="number" name="id" id="id" class="form-control" placeholder="Enter Umur" value="{{ $petugas[0]->id }}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="Nama_petugas">Nama Petugas</label>
                    <input type="text" name="nama_petugas" id="nama_petugas" class="form-control" placeholder="Enter Umur" value="{{ $petugas[0]->nama_petugas }}" disabled>
                  </div>
                <div class="form-group">
                  <label for="jabatan_petugas">Jabatan Petugas</label>
                  <input type="text" name="jabatan_petugas" id="jabatan_petugas" class="form-control" placeholder="Enter Umur" value="{{ $petugas[0]->jabatan_petugas }}" disabled>
                </div>
                    <div class="form-group">
                  <label for="tlp_petugas">Telpon Petugas</label>
                  <input type="text" name="tlp_petugas" id="tlp_petugas" class="form-control" placeholder="Enter Umur" value="{{ $petugas[0]->tlp_petugas }}" disabled>
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Enter Umur" value="{{ $petugas[0]->alamat }}" disabled>
                </div>
                <div class="card-footer">
                  <a class="btn btn-danger" href="{{ route('petugas.index')}}">Kembali</a>
                </div>

              <!-- /.card-body -->

          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection