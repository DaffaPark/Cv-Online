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
      <th scope="col">Nama</th>
      <th scope="col">E-mail</th>
    </tr>
  </thead>
  <tbody>
    @php
      $no = 1;
    @endphp
@foreach ($alumnis as $alumni)
          @if ($alumni->user->id == Auth::user()->id)
      <td>{{ $alumni->name }}</td>
      <td>{{ $alumni->user->email }}</td>
                  <a href="/edit/{{ $alumni->id }}" class="btn btn-dark">Edit</a>
                  <a href="/export/{{ $alumni->id }}" class="btn btn-dark">Cetak</a>
                  <a href="/hapus/{{ $alumni->id }}" class="btn btn-danger">Hapus</a>
                  </div>
                </div>
              </div>
            </div>
            </div>
         @endif

        @endforeach
@endsection