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
              <h3 class="card-title">Edit data Anggota</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('anggota.update', $anggota[0]->id) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="id">id</label>
                  <input type="text" name="id" id="id" class="form-control @error('id') is-invalid @enderror " placeholder="Enter Nama" value="{{ $anggota[0]->id }}">
                </div>
                @error('nama')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                  <label for="kode">Kode</label>
                  <input type="text" name="kode" id="kode" class="form-control @error('kode') is-invalid @enderror" placeholder="Enter Umur" value="{{ $anggota[0]->kode }}">
                </div>
                @error('umur')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Enter Umur" value="{{ $anggota[0]->nama }}">
                </div>
                @error('umur')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                  <label for="jk">jenis Kelamin</label>
                  <input type="text" name="jk" id="jk" class="form-control @error('jk') is-invalid @enderror" placeholder="Enter Umur" value="{{ $anggota[0]->jk }}">
                </div>
                @error('umur')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                  <label for="jurusan">Jurusan</label>
                  <input type="text" name="jurusan" id="jurusan" class="form-control @error('jurusan') is-invalid @enderror" placeholder="Enter Umur" value="{{ $anggota[0]->jurusan }}">
                </div>
                @error('umur')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                  <label for="tlp">Telepon</label>
                  <input type="text" name="tlp" id="tlp" class="form-control @error('tlp') is-invalid @enderror" placeholder="Enter Umur" value="{{ $anggota[0]->tlp }}">
                </div>
                @error('umur')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                  <label for="text">Alamat</label>
                  <input type="text" name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Enter Umur" value="{{ $anggota[0]->alamat }}">
                </div>
                @error('umur')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="cancel" class="btn btn-danger btn-md">Cancel</button>
                <button type="submit" class="btn btn-warning">Update</button>
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