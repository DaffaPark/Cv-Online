@extends('layouts.alumni')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <div class="card-body">
<table id="status" class="table table-striped table-bordered">

  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">E-mail</th>
<<<<<<< HEAD
      <th scope="col">No Telp</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Angkatan</th>
      <th scope="col">Status</th>
      <th></th>
      <th></th>
      <th></th>
=======
      <th scope="col">Aksi</th>
>>>>>>> b8a4fe1de57a4ffb9b887f76212ecb1c831b8f47
    </tr>
  </thead>
  <tbody>
    @php
      $no = 1;
    @endphp
@foreach ($alumnis as $alumni)
          @if ($alumni->user->id == Auth::user()->id)
<<<<<<< HEAD
          <td>{{ $alumni->user_id }}</td>
      <td>{{ $alumni->name }}</td>
      <td>{{ $alumni->user->email }}</td>
      <td>{{ $alumni->notelp }}</td>
      <td>{{ $alumni->jurusan }}</td>
      <td>{{ $alumni->angkatan}}</td>
      <td>{{ $alumni->status}}</td>
      <div class="d-flex justify-content-center">
      <td><a href="/edit/{{ $alumni->id }}" class="btn btn-dark">Edit</a></td>
      <td><a href="/export/{{ $alumni->id }}" class="btn btn-dark">Cetak</a></td>
      <td><a href="/hapus/{{ $alumni->id }}" class="btn btn-danger">Hapus</a></td>
      </div>
=======
          <tr>
              <td>{{ $alumni->name }}</td>
              <td>{{ $alumni->user->email }}</td>
              <td>
              <a href="/edit/{{ $alumni->id }}" class="btn btn-dark">Edit</a>
              </td>
              <td>
              <a href="/export/{{ $alumni->id }}" class="btn btn-dark">Cetak</a>
              </td>
              <td>
              <a href="/hapus/{{ $alumni->id }}" class="btn btn-danger">Hapus</a>
              </td>
          </tr>
>>>>>>> b8a4fe1de57a4ffb9b887f76212ecb1c831b8f47
                  </div>
                </div>
              </div>
            </div>
            </div>
         @endif

        @endforeach
@endsection