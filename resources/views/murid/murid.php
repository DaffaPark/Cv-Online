@extends('layouts.murid')

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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>RPL</h3>

                <p>Rekayasa Perangkat Lunak</p>
              </div>
              <div class="icon">
                <i class="bi bi-laptop"></i>
              </div>
              <a href="/searchrpl" class="small-box-footer">Masuk Ke RPL<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>TKJ</h3>

                <p>Teknik Komputer jaringan</p>
              </div>
              <div class="icon">
                <i class="bi bi-cpu"></i>
              </div>
              <a href="/searchtkj" class="small-box-footer">Masuk Ke TKJ<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>MM</h3>

                <p>Multi Media</p>
              </div>
              <div class="icon">
                <i class="bi bi-collection"></i>
              </div>
              <a href="/searchmm" class="small-box-footer">Masuk Ke MM<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Animasi</h3>

                <p>Animasi</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/searchanimasi" class="small-box-footer">Masuk Ke Animasi<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

           <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>DI</h3>

                <p>Design Interior</p>
              </div>
              <div class="icon">
               <i class="bi bi-house"></i>
              </div>
              <a href="/searchdi" class="small-box-footer">Masuk Ke DI<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>KI</h3>

                <p>Kimia Industri</p>
              </div>
              <div class="icon">
                <i class="bi bi-radioactive"></i>
              </div>
              <a href="/searchki" class="small-box-footer">Masuk Ke KI<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>PEKSOS</h3>

                <p>Peksos</p>
              </div>
              <div class="icon">
                <i class="bi bi-people"></i>
              </div>
              <a href="/searchpeksos" class="small-box-footer">Masuk Ke PEKSOS<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>TV</h3>

                <p>Televisi</p>
              </div>
              <div class="icon">
                <i class="bi bi-tv"></i>
              </div>
              <a href="/searchtv" class="small-box-footer">Masuk Ke TV<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-dark">
              <div class="inner">
                <h3>FILM</h3>

                <p>Film</p>
              </div>
              <div class="icon">
               <i class="bi bi-camera-reels"></i>
              </div>
              <a href="/searchfilm" class="small-box-footer">Masuk Ke Film<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>

     
 @endsection
