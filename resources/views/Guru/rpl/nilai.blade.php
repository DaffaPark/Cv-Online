@extends('layouts.rpl')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Hitung Nilai Murid</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active"><a href="/tambahstatus/{{ $data->id }}">Status Perkembangan</a></li>
              <li class="breadcrumb-item active">Hitung Nilai Murid</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container">
          <div class="row">
            @if ($message = Session::get('Sukses'))
            <div class="alert alert-info" role="alert">
              {{ $message }}
            </div>
          
            @endif

<div class="container mb-5">
          <div class="row justify-content-center">
            <div class="col-8">
            <div class="card">
              <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                 @csrf
  <div class="mb-3">
    <form action="#" id="myform">
  <div class="mb-3">
    <label for="n1" class="form-label">Tugas</label>
    <input type="text" name="nilai" class="form-control" id="n1" aria-describedby="emailHelp" value="">
  </div>
  <div class="mb-3">
    <label for="n2" class="form-label">Magang</label>
    <input type="text" name="nilai" class="form-control" id="n2" aria-describedby="emailHelp" value="">
  </div>
  <div class="mb-3">
    <label for="n3" class="form-label">UTS</label>
    <input type="text" name="nilai" class="form-control" id="n3" aria-describedby="emailHelp" value="">
  </div>
  <div class="mb-3">
    <label for="n4" class="form-label">UAS</label>
    <input type="text" name="nilai" class="form-control" id="n4" aria-describedby="emailHelp" value="">
  </div>
  <input type="button" onclick="data()" class="btn btn-primary" value="hitung"></button>
  <input type="reset" class="btn btn-primary" value="reset"></button>

<!-- output -->
  <p id="tugas_out"></p>
  <p id="magang_out"></p>
  <p id="uts_out"></p>
  <p id="uas_out"></p>
  <br>
  <p id="note"></p>
  <p id="ket_tugas"></p>
  <p id="ket_magang"></p>
  <p id="ket_uts"></p>
  <p id="ket_uas"></p>

  <p id="jumlah_out"></p>
  <br>
 </form>
 <br><br>

 <script>
function data(){
   var m1 = document.getElementById('n1').value;
   var m2 = document.getElementById('n2').value;
   var m3 = document.getElementById('n3').value;
   var m4 = document.getElementById('n4').value;

   tugas = 0.1*m1;
   magang = 0.2*m2;
   uts = 0.3*m3;
   uas = 0.4*m4;

   jumlah = tugas+magang+uts+uas;


/*output*/
   document.getElementById("tugas_out").innerHTML="Tugas : "+m1;
   document.getElementById("magang_out").innerHTML="Magang : "+m2;
   document.getElementById("uts_out").innerHTML="UTS : "+m3;
   document.getElementById("uas_out").innerHTML="UAS : "+m4;

   document.getElementById("note").innerHTML="Note : ";
   document.getElementById("ket_tugas").innerHTML="Tugas 10% : "+tugas;
   document.getElementById("ket_magang").innerHTML="Magang 20% : "+magang;
   document.getElementById("ket_uts").innerHTML="UTS 30% : "+uts;
   document.getElementById("ket_uas").innerHTML="UAS 40% : "+uas;


   document.getElementById("jumlah_out").innerHTML="Jumlah : "+jumlah;

}
 </script>
  <a href="/tambahstatus/{{ $data->id }}" class="btn btn-primary">Kembali</a>
            
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection