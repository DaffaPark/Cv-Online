@extends('layouts.alumni')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active"><a href="#">Edit</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
            <form action="/update/{{ $alumni->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-10">
                        <div class="profile-head">
                                    <h5>
                                        Profil Murid RPL
                                    </h5>
                                    <h6>
                                        Web Developer and Designer
                                    </h6>
                                   
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Tentang</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Lainnya</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <br>
                        <br>
                        <a href="/nilai/{{ $alumni->id }}" class="btn btn-primary">Hitung Nilai</a>

                    </div>
                </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nama</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{ $alumni->name }}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Angkatan</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="angkatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{ $alumni->angkatan }}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>TTL</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="ttl" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $alumni->ttl }}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Alamat</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $alumni->alamat }}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>No Telp</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="notelp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $alumni->notelp }}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>E-mail</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $alumni->email }}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Status</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="status" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $alumni->status }}">
                                            </div>
                                        </div>
                                        <br>
                        </div>
                           <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nilai</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="nilai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $alumni->nilai }}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Akademik</label>
                                            </div>
                                            <div class="col-md-6">
                                                <textarea name="akademik" id="akademik" class="form-control" cols="15" rows="3">{{ $alumni->akademik }}</textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Sikap Selama Disekolah</label>
                                            </div>
                                            <div class="col-md-6">
                                                 <textarea name="sikap" id="sikap" class="form-control" cols="15" rows="3">{{ $alumni->sikap }}</textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Keahlian Yang Dipelajari</label>
                                            </div>
                                            <div class="col-md-6">
                                                <textarea name="keahlian" id="keahlian" class="form-control" cols="15" rows="3">{{ $alumni->keahlian }}</textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Pengalaman Yang Didapat</label>
                                            </div>
                                            <div class="col-md-6">
                                               <textarea name="pengalaman" id="pengalaman" class="form-control" cols="15" rows="3">{{ $alumni->pengalaman }}</textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Perkembangan Selama Bersekolah</label>
                                            </div>
                                            <div class="col-md-6">
                                                <textarea name="perkembangan" id="perkembangan" class="form-control" cols="15" rows="3">{{ $alumni->perkembangan }}</textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Prestasi Yang Diperoleh</label>
                                            </div>
                                            <div class="col-md-6">
                                                <textarea name="prestasi" id="prestasi" class="form-control" cols="15" rows="3">{{ $alumni->prestasi }}</textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Pengalaman Berorganisasi</label>
                                            </div>
                                            <div class="col-md-6">
                                                <textarea name="organisasi" id="organisasi" class="form-control" cols="15" rows="3">{{ $alumni->organisasi }}</textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

@endsection