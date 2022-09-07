<?php
if(isset($_GET['page'])){
  $page = $_GET['page'];
switch ($page) {
// Beranda
  case 'data_asiswa':
    include 'pages/siswa/data_siswa.php';
    break;
  }
}else{
    include "pages/home.php";
  }
?>
