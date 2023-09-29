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
            <li class="breadcrumb-item active">General Form</li>
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
          <div class="card card-warning">
            <div class="card-header">
              <h3 class="card-title">Edit data Petugas</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('petugas.update', $petugas[0]->id) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="id">id</label>
                  <input type="text" name="id" id="id" class="form-control @error('id') is-invalid @enderror " placeholder="Enter Nama" value="{{ $petugas[0]->id }}">
                </div>
                @error('id')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                  <label for="nama_petugas">Nama Petugas</label>
                  <input type="text" name="nama_petugas" id="nama_petugas" class="form-control @error('kode') is-invalid @enderror" placeholder="Enter Umur" value="{{ $petugas[0]->nama_petugas }}">
                </div>
                @error('umur')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                  <label for="jabatan_petugas">Jabatan Petugas</label>
                  <input type="text" name="jabatan_petugas" id="jabatan_petugas" class="form-control @error('jabatan_petugas') is-invalid @enderror" placeholder="Enter Umur" value="{{ $petugas[0]->jabatan_petugas }}">
                </div>
                @error('umur')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                  <label for="tlp_petugas">Telepon Petugas</label>
                  <input type="text" name="tlp_petugas" id="tlp_petugas" class="form-control @error('tlp_petugas') is-invalid @enderror" placeholder="Enter Umur" value="{{ $petugas[0]->tlp_petugas }}">
                </div>
                @error('umur')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Enter Umur" value="{{ $petugas[0]->alamat }}">
                </div>
                @error('umur')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="cancel" class="btn btn-danger btn-md">Cancel</button>
                <button type="submit" class="btn btn-warning">Submit</button>
              </div>
            </form>
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