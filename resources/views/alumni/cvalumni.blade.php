
@extends('layouts.alumni')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Buat CV</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Buat CV</li>
            </ol>
          </div><!-- /.col -->
        

<div class="container mb-5">
          <div class="row justify-content-center">
            <div class="col-8">
            <div class="card">
              <div class="card-body">
                <form action="/store" method="POST" enctype="multipart/form-data">
                 @csrf
        

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">jeniskelamin</label>
    <select class="form-select" name="jeniskelamin" aria-label="Default select example">
  <option selected>Pilih jeniskelamin</option>
  <option value="laki-laki">laki-laki</option>
  <option value="kuliah">Perempuan</option>
</select>   
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jurusan</label>
    <select class="form-select" name="jurusan" aria-label="Default select example">
  <option selected>Pilih Jurusan</option>
  <option value="RPL">RPL</option>
  <option value="TKJ">TKJ</option>
  <option value="MM">Multimedia</option>
  <option value="DI">Design Interior</option>
  <option value="FILM">FILM</option>
  <option value="ANIMASI">ANIMASI</option>
  <option value="PEKSOS">PEKSOS</option>
  <option value="KI">Kimia Industri</option>
  <option value="TV">TV & Broadcast</option>
</select>   
  </div>
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Angkatan Tahun...</label>
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
    <label for="exampleInputEmail1" class="form-label">Status</label>
    <select class="form-select" name="status" aria-label="Default select example">
  <option selected>Status Anda Saat Ini</option>
  <option value="wirausaha">Wirausaha</option>
  <option value="kerja">kerja</option>
  <option value="kuliah">Kuliah</option>
  
</select>   
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Pengalaman Bekerja</label>
    <input type="text" name="pengalamankerja" placeholder="apabila belum bekerja silahkan lewati" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Apakah pekerjaan anda sesuai dengan jurusan kompentesi?</label>
    <input type="text" name="sesuai" placeholder="Ya atau Tidak..." class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jabatan Yang Telah Diraih</label>
    <input type="text" name="jabatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Berapa pendaptan dari pekerjaan anda?</label>
    <input type="text" name="pendapatan" placeholder="Misal 1jt Keatas..."  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
