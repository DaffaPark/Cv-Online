@extends('layouts.muridalumni')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Alumni</h1>
          </div><!-- /.col -->                              
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Data Alumni</li>
            </ol>
          </div>
 
<div class="container">
    <div class="d-flex justify-content-center">
          <div class="row">
            @if ($message = Session::get('Sukses'))
            <div class="alert alert-info" role="alert">
              {{ $message }}
            </div>
          
            @endif
            <form action="/filteralumni" method="get">
                            @csrf
                            <div class="row mb-2">
                                <div class="col-sm-3">
                                    <label for="" class="form-label">Name</label>
                                    <input name="name" type="text" class="form-control" placeholder="Name" value="{{isset($_GET['name']) ? $_GET['name'] : ''}}">  
                                </div>              
                                <div class="col-sm-1">
                                    <label for="" class="form-label">Jurusan</label>
                                    <select name="jurusan" class="form-select">
                                        <option value="RPL" selected="{{isset($_GET['jurusan']) && $_GET['jurusan'] == 'RPL'}}">RPL</option>
                                        <option value="TKJ" selected="{{isset($_GET['jurusan']) && $_GET['jurusan'] == 'TKJ'}}">TKJ</option>
                                        <option value="MM" selected="{{isset($_GET['jurusan']) && $_GET['jurusan'] == 'MM'}}">MM</option>
                                        <option value="PEKSOS" selected="{{isset($_GET['jurusan']) && $_GET['jurusan'] == 'PEKSOS'}}">PEKSOS</option>
                                        <option value="ANIMASI" selected="{{isset($_GET['jurusan']) && $_GET['jurusan'] == 'ANIMASI'}}">ANIMASI</option>
                                        <option value="DI" selected="{{isset($_GET['jurusan']) && $_GET['jurusan'] == 'DI'}}">DI</option>
                                        <option value="TV" selected="{{isset($_GET['jurusan']) && $_GET['jurusan'] == 'TV'}}">TV</option>
                                        <option value="KI" selected="{{isset($_GET['jurusan']) && $_GET['jurusan'] == 'KI'}}">KI</option>
                                        <option value="FILM" selected="{{isset($_GET['jurusan']) && $_GET['jurusan'] == 'FILM'}}">FILM</option>
                                        <option value="" selected="">-</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <button type="submit" class="btn btn-primary mt-4">Search</button>
                                </div>

           
                               <div class="col-auto">
                                  <a href="/exportalumni" class="btn btn-primary mt-4">Export Excel</a>
                                </div>
                                <div class="col-auto">
                                  <a href="/Importdataalumni" class="btn btn-primary mt-4">Import Excel</a>
                                </div>



 <div class="card-body">
<table id="status" class="table table-striped table-bordered">

  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NIS</th>
      <th scope="col">Nama</th>
      <th scope="col">Jurusan</th>  
      <th scope="col">Status</th>
      <th scope="col">Angkatan</th>    
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @php
      $no = 1;
    @endphp

    @foreach($alumnis as $index => $row)
    <tr>
      <th scope="row">{{ $index + $alumnis->firstItem() }}</th>
      <td>{{ $row->nis }}</td>
      <td>{{ $row->name }}</td>
      <td>{{ $row->jurusan }}</td>
      <td>{{ $row->status }}</td>
      <td>{{ $row->angkatan }}</td>
      <td>
        <a href="/statusalumni/{{ $row->id }}" class="btn btn-dark ">Status</a>
      </td>
      <td>
        <a href="/hapusalumni/{{ $row->id }}" class="btn btn-danger">Hapus</a>
      </td>
    </tr>

    @endforeach
    
  </tbody>
</table>
{{ $alumnis->links() }}
</div>
</div>
</div>
</div>

@endsection