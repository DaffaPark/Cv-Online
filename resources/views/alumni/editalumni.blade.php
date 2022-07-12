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
                                        Data Profil Alumni
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
                                         <div class="form-group">
                                            <label for="exampleFormControlSelect1">Status</label>
                                            <select class="form-control"  name="status"  value="{{ $alumni->status }}" id="exampleFormControlSelect1">
                                            <option value="wirausaha">Wirausaha</option>
                                        <option value="kerja">kerja</option>
                                        <option value="kuliah">Kuliah</option>
                                            </select>
                                        </div>
                                        </div>
                                        <br>
                        </div>
                           <br>
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