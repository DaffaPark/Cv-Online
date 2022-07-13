@extends('layouts.rpl')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Siswa</h1>
          </div><!-- /.col -->                              
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Data Murid</li>
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
            <form action="/filterrpl" method="get">
                            @csrf
                            <div class="row mb-2">
                                <div class="col-sm-3">
                                    <label for="" class="form-label">Name</label>
                                    <input name="name" type="text" class="form-control" placeholder="Name" value="{{isset($_GET['name']) ? $_GET['name'] : ''}}">  
                                </div>
                                <div class="col-sm-1">
                                    <label for="" class="form-label">Kelas</label>
                                    <select name="kelas" class="form-select">
                                        <option value="X" selected="{{isset($_GET['kelas']) && $_GET['kelas'] == 'X'}}">X</option>
                                        <option value="XI" selected="{{isset($_GET['kelas']) && $_GET['kelas'] == 'XI'}}">XI</option>
                                        <option value="XII" selected="{{isset($_GET['kelas']) && $_GET['kelas'] == 'XII'}}">XII</option>
                                        <option value="" selected="">-</option>
                                    </select>
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
                                  <a href="/exportrpl" class="btn btn-primary mt-4">Export Excel</a>
                                </div>
                                <div class="col-auto">
                                  <a href="/Importdatarpl" class="btn btn-primary mt-4">Import Excel</a>
                                </div>



 <div class="card-body">
<table id="status" class="table table-striped table-bordered">

  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NIS</th>
      <th scope="col">Nama</th>
      <th scope="col">kelas</th>
      <th scope="col">Jurusan</th>  
      <th scope="col">Nilai</th>
      <th scope="col">Sikap</th>    
      <th scope="col">Keahlian</th>
    </tr>
  </thead>
  <tbody>
    @php
      $no = 1;
    @endphp

    @foreach($data as $index => $row)
    <tr>
      <th scope="row">{{ $index + $data->firstItem() }}</th>
      <td>{{ $row->nis }}</td>
      <td>{{ $row->name }}</td>
      <td>{{ $row->kelas }}</td>
      <td>{{ $row->jurusan }}</td>
      <td>{{ $row->nilai }}</td>
      <td>{{ $row->sikap }}</td>
      <td>{{ $row->keahlian }}</td>
      <td>
        <a href="/tambahstatus/{{ $row->id }}" class="btn btn-primary ">Status</a>
      </td>
      <td>
        <a href="/hapusrpl/{{ $row->id }}" class="btn btn-danger">Hapus</a>
      </td>
    </tr>

    @endforeach
    
  </tbody>
</table>
{{ $data->links() }}
</div>
</div>
</div>
</div>

@endsection