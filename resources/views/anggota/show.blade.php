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
            <li class="breadcrumb-item active">Table Data Anggota</li>
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
                    <input type="number" name="id" id="id" class="form-control" placeholder="Enter Umur" value="{{ $anggota[0]->id }}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="kode">kode</label>
                    <input type="text" name="kode" id="kode" class="form-control" placeholder="Enter Umur" value="{{ $anggota[0]->kode }}" disabled>
                  </div>
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" name="nama" id="nama" class="form-control" placeholder="Enter Umur" value="{{ $anggota[0]->nama }}" disabled>
                </div>
                    <div class="form-group">
                  <label for="jk">jenis Kelamin</label>
                  <input type="text" name="jk" id="jk" class="form-control" placeholder="Enter Umur" value="{{ $anggota[0]->jk }}" disabled>
                </div>
                <div class="form-group">
                  <label for="jurusan">jurusan</label>
                  <input type="text" name="jurusan" id="jurusan" class="form-control" placeholder="Enter Umur" value="{{ $anggota[0]->jurusan }}" disabled>
                </div>
                <div class="form-group">
                  <label for="tlp">telpon</label>
                  <input type="text" name="tlp" id="tlp" class="form-control" placeholder="Enter Umur" value="{{ $anggota[0]->tlp }}" disabled>
                </div>
                <div class="form-group">
                  <label for="alamat">alamat</label>
                  <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Enter Umur" value="{{ $anggota[0]->alamat }}" disabled>
                </div>
              </div>
              <div class="card-footer">
                <a class="btn btn-danger" href="{{ route('anggota.index')}}">Kembali</a>
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