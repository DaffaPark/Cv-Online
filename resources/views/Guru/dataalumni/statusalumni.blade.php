@extends('layouts.muridalumni')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Status Perkembangan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active"><a href="/statusalumni/{{ $alumnis->id }}">Status Perkembangan</a></li>
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
            <form action="/updatealumni/{{ $alumnis->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-10">
                        <div class="profile-head">
                                    <h5>
                                        Profil Alumni
                                    </h5>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Tentang</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <br>
                        <br>
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
                                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{ $alumnis->name }}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Angkatan</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="angkatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{ $alumnis->angkatan }}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>TTL</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="ttl" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $alumnis->ttl }}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Alamat</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $alumnis->alamat }}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>No Telp</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="notelp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $alumnis->notelp }}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>E-mail</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $alumnis->email }}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                         <div class="col-md-6">
                                            <label for="exampleFormControlSelect1">Status</label>
                                        </div>
                                        <div class="col-md-6">
                                            <select class="form-control"  name="status"  value="{{ $alumnis->status }}" id="exampleFormControlSelect1">
                                            <option value="wirausaha">Wirausaha</option>
                                            <option value="kerja">kerja</option>
                                            <option value="kuliah">Kuliah</option>
                                            </select>
                                        </div>
                                    </div>
                                <br>
                                <div class="row">
                                            <div class="col-md-6">
                                                <label>Alamat Bekerja/Kuliah/Wirausaha</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="alamatkerja" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $alumnis->alamatkerja }}">
                                            </div>
                                        </div>
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