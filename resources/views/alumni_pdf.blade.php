<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta name="generator" content="Aspose.Words for .NET 22.3.0" />
<script src="https://cdn.tailwindcss.com"></script>
<title>
{{$alumni->name}}
</title>
</style>
</head>
<body>
    <div>
    <table cellspacing="0" cellpadding="0" class="TableGrid" style="width:100%; border-collapse:collapse">
    <tr style="height:90pt; -aw-height-rule:exactly">
    <td style="width:468pt; vertical-align:top">
    <div class="container">
  <div class="header">
    <div class="full-name">
      <span class="name">{{$alumni->name}}</span>
    </div>
<br>

    <div class="contact-info">
      <span class="email">Email: </span>
      <span class="email-val">{{$alumni->email}}</span>
    </div>
    <div class="contact-info">
    <span class="phone">Phone: </span>
      <span class="phone-val">{{$alumni->notelp}}</span>
      </div>
</td>
</tr>
<tr>
    <td style="width:468pt; padding-top:21.6pt; padding-bottom:5.75pt; vertical-align:top">
    <p style="font-size:11pt">
    <span style="-aw-sdt-content:placeholder; -aw-sdt-tag:'Enter resume text:'; -aw-sdt-title:'Enter resume text:'">
    <span class="cv-name" >Cv Online Dari SMKN 2 Banjarmasin Untuk para Alumni Yang Sudah Lulus.</span>
</span>
</p>
</td>
</tr>
</table>
<h1>
<span style="-aw-sdt-content:placeholder; -aw-sdt-tag:'Experience:'; -aw-sdt-title:'Experience:'">
    <span>Data Diri</span>
</span>
</h1>
<table cellspacing="0" cellpadding="0" class="TableGrid" style="width:99.5%; margin-left:3.6pt; border-collapse:collapse">
    <tr>
    <td style="width:438.95pt; border-left:2.25pt dotted #bfbfbf; padding-left:27.68pt; vertical-align:top">
    <h3>
    <span style="-aw-sdt-content:placeholder; -aw-sdt-tag:'Enter date from for company 1: '; -aw-sdt-title:'Enter date from for company 1: '">
    <div class="contact-info">
      <span class="jurusan">Jurusan:</span>
      <span class="jurusan_">{{$alumni->jurusan}}</span>
    </div>
    <div class="contact-info">
      <span class="angkatan">Angkatan:</span>
      <span class="angkatan_">{{$alumni->angkatan}}</span>
    </div>
    <div class="contact-info">
      <span class="alamat">Alamat: </span>
      <span class="alamat_">{{$alumni->alamat}}</span>
    </div>
    <div class="contact-info">
      <span class="ttl">TTL:</span>
      <span class="ttl_">{{$alumni->ttl}}</span>
    </div>
        <span class="jeniskelamin">Jenis Kelamin:</span>
        <span class="jenis-Kelamin">{{$alumni->jeniskelamin}}</span>
</table>
<div style="-aw-sdt-content:placeholder; -aw-sdt-tag:'Keahlian:'; -aw-sdt-title:'Keahlian:'">
    <h1>
    <span>
Status </span>
</h1>
</div>
<table cellspacing="0" cellpadding="0" class="TableGrid" style="width:99.5%; margin-left:3.6pt; border-collapse:collapse">
    <tr>
    <td style="width:438.95pt; border-left:2.25pt dotted #bfbfbf; padding-left:27.68pt; vertical-align:top">
    <h3>
    <span style="-aw-sdt-content:placeholder; -aw-sdt-tag:'Enter month of school 1:'; -aw-sdt-title:'Enter month of school 1:'">
    <span class="status">Status:</span>
    <span class="status_">{{$alumni->status}}</span>
</table>
<div style="-aw-sdt-content:placeholder; -aw-sdt-tag:'Akademik:'; -aw-sdt-title:'Akademik:'">
    <h1>
    <span>
Pengalaman Kerja</span>
</h1>
</div>
<table cellspacing="0" cellpadding="0" class="TableGrid" style="width:99.5%; margin-left:3.6pt; border-collapse:collapse">
    <tr>
    <td style="width:438.95pt; border-left:2.25pt dotted #bfbfbf; padding-left:27.68pt; vertical-align:top">
    <h3>
    <span style="-aw-sdt-content:placeholder; -aw-sdt-tag:'Enter month of school 1:'; -aw-sdt-title:'Enter month of school 1:'">
    <div class="contact-info">
    <span class="pengalaman">Pengalaman:</span>
    <span class="Pengalaman_kerja">{{$alumni->pengalamankerja}}</span>
</div>
<div class="contact-info">
    <span class="alamatkerja">Alamat {{$alumni->status}}:</span>
    <span class="alamatkerja">{{$alumni->alamatkerja}}</span>
</div>
    
</table>
</body>
</html>
