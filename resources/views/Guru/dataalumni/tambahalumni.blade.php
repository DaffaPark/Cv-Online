@extends('layouts.muridalumni')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Siswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Tambah Siswa</li>
            </ol>
          </div><!-- /.col -->
        

<div class="container mb-5">
          <div class="row justify-content-center">
            <div class="col-8">
            <div class="card">
              <div class="card-body">
                <form action="/insertalumni" method="POST" enctype="multipart/form-data">
                 @csrf

        <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nis</label>
    <input type="text" name="nis" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">jenis Kelamin</label>
    <select class="form-control"  name="jeniskelamin"  id="exampleFormControlSelect1">
    <option value="laki-laki">laki-laki</option>
    <option value="perempuan">Perempuan</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Kelas</label>
    <select class="form-control"  name="kelas"  id="exampleFormControlSelect1">
    <option value="X">X</option>
    <option value="XI">XI</option>
    <option value="XII">XII</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Jurusan</label>
    <select class="form-control"  name="jurusan"  id="exampleFormControlSelect1">
    <option value="RPL">RPL</option>
    </select>
  </div>

  

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Angkatan Tahun Ke-</label>
    <input type="text" name="angkatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>


  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tempat Tanggal Lahir</label>
    <input type="text" name="ttl" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Alamat</label>
    <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">No Telp</label>
    <input type="number" name="notelp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">E-mail</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nilai</label>
    <input type="number" name="nilai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">akademik</label>
    <input type="text" name="akademik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">sikap</label>
    <input type="text" name="sikap" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Keahlian</label>
    <input type="text" name="keahlian" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">pengalaman</label>
    <input type="text" name="pengalaman" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">perkembangan</label>
    <input type="text" name="perkembangan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">prestasi</label>
    <input type="text" name="prestasi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">organisasi</label>
    <input type="text" name="organisasi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Status</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option value="Alumni">Alumni</option>
    </select>
  </div>




  <button type="submit" class="btn btn-primary">Submit</button>
</form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
@endsection