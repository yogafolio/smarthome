<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style type="text/css">
nav ul li a.nav-link:hover {
    background-color: #00000000;
  }
  nav ul li a.nav-link:link {
    
  }
nav ul li a.nav-link:active {
    background-color: #007bff;
  }
nav ul li a.nav-link:visited {
   
  }

</style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/css/bootstrap.min.css">
    <!-- Perticles JS CSS -->
    <link rel="stylesheet" type="text/css" href="http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/particlesjs/style.css">
    <!-- Costum CSS -->
    <link rel="stylesheet" type="text/css" href="http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/style.css">
    <!-- Icon Logo Offline-->
    <link rel="shortcut icon" type="image/png" href="http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/images/icon-logo.png">
    
    <!-- Fontawesome 4 CSS online
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
<!-- Fontawesome 4 CSS offline-->
<link rel="stylesheet" href="http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/css/fontawesomeicon/font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- Fontawesome 5 CSS online
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">-->
    <!-- Fontawesome 5 CSS offline-->
    <link rel="stylesheet" href="http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/css/fontawesomeicon/fontawesome-free-5.7.2-web/css/all.css">
<!-- Bootstrap icon CSS online
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<!-- Bootstrap icon CSS offline -->
<link rel="stylesheet" href="http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/css/bootstrapicon/bootstrap-3.3.7/dist/css/bootstrap.min.css">

    <title>Smart Home - Monitoring dan Control</title>
    <!-- javasript Typed.JS CDN
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.8/typed.min.js"></script>-->

    <!-- javasript Typed.JS Offline -->
    <script src="http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/js/typedjs/typed.min.js"></script>
    <!-- awal font google "Open Sans"-->
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
<style>
h1.display-5 {
    font-family: 'Open Sans';
}
body {
    font-family: 'Open Sans';font-size: 14px;
}
</style><!-- akhir font google -->
  </head>
  <body class="bg-dark">
<div id="particles-js"></div>
<header style="min-height: 130px; position: relative;"> 
<div class="text-white pt-3 pl-1">
  <div class="container">
    <h1 class="display-5">Smart Home Dashboard</h1>
    <p class="lead font-weight-bold">Welcome <span id="typed"></span></p>
  </div>
</div>

</header>

<nav>
    <ul class="nav justify-content-end mr-5">
  <li class="nav-item font-weight-bold">
    <a class="nav-link rounded" href="http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/live/">Live</a>
  </li>
  <li class="nav-item font-weight-bold">
    <a class="nav-link rounded" href="http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/gallery/">Gallery</a>
  </li>
  <li class="nav-item font-weight-bold">
    <a class="nav-link rounded" href="http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/credit/">Credit</a>
  </li>
  <li class="nav-item font-weight-bold">
    <a class="nav-link rounded text-white" href="http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/features/" style="background-color: #007bff;">Features</a>
  </li>
  <li class="nav-item font-weight-bold">
    <a class="nav-link rounded" href="http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/technology/">Technology</a>
  </li>
  <li class="nav-item font-weight-bold">
    <a class="nav-link rounded" href="http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/about/">About</a>
  </li>
  
</ul>
</nav>
<!---->
<div class="row1" style="min-height: 720px;">
  <div class="col-3 pl-2">
    <div class="nav flex-column nav-pills ml-5 mt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link font-weight-bold mb-1" id="v-pills-home-tab" href="http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-home" style='font-size:17px'></i> Home</a>
      <a class="nav-link font-weight-bold mb-1" id="v-pills-profile-tab" href="http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/table/" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-table" style='font-size:17px'></i> Table</a>
      <a class="nav-link font-weight-bold mb-1" id="v-pills-messages-tab" href="http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/statistic/" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="far fa-chart-bar" style='font-size:17px'></i> Statistic</a>
      <a class="nav-link font-weight-bold mb-1" id="v-pills-settings-tab" href="http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/lamp-control/" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="glyphicon glyphicon-lamp" style='font-size:17px'></i> Lamp Control</a>
      <a class="nav-link font-weight-bold mb-1" id="v-pills-settings-tab" href="http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/capture-image/" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class='far fa-images' style='font-size:17px'></i> Capture Image</a>
      <a class="nav-link font-weight-bold mb-1" id="v-pills-settings-tab" href="http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/cctv/" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-video-camera" style='font-size:17px'></i> CCTV</a>
    </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"></div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
      <!---->
      <nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background-color: #00000000">
    <li class="breadcrumb-item"><a href="http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Features</li>
  </ol>
</nav>
      <!---->
      <div class="ml-4">
<div class="text-white mb-5">
<h2 class="mb-4">Features</h2>

<dl class="row">
  <dt class="col-sm-3">Home</dt>
  <dd class="col-sm-9">Merupakan Halaman awal dari Aplikasi berbasis Web atau halaman situs (Website).</dd>

  <dt class="col-sm-3">Table</dt>
  <dd class="col-sm-9">Merupakan Halaman yang menampilkan Data Tabular atau Tabel.
  </dd>

  <dt class="col-sm-3">Statistic</dt>
  <dd class="col-sm-9">Merupakan Halaman yang menampilkan Data Chart.</dd>

  <dt class="col-sm-3">Lamp Control</dt>
  <dd class="col-sm-9">Merupakan Halaman untuk mengontrol atau mengendalikan Lampu.</dd>

  <dt class="col-sm-3">Capture Image</dt>
  <dd class="col-sm-9">Merupakan Halaman untuk mengambil gambar atau penangkapan gambar.
  </dd>

  <dt class="col-sm-3">CCTV</dt>
  <dd class="col-sm-9">Merupakan Halaman Redirect ke IP Web CCTV.
  </dd>
</dl>
<hr>
<!-- -->
<dl class="row">
  <dt class="col-sm-3">Live</dt>
  <dd class="col-sm-9">Merupakan Halaman yang menampilkan data dari sensor yang ada secara Live (real time).</dd>

  <dt class="col-sm-3">Gallery</dt>
  <dd class="col-sm-9">
    Merupakan Halaman yang menampilkan hasil Capture dari Kamera Serial TTL VC0706 yang diambil dari database.
  </dd>

  <dt class="col-sm-3">Credit</dt>
  <dd class="col-sm-9">Merupakan Halaman yang menampilkan Teknologi yang digunakan untuk membangun projek ini.</dd>

  <dt class="col-sm-3">Technology</dt>
  <dd class="col-sm-9">Merupakan Halaman yang menampilkan Hardware dan software yang digunakan untuk membangun projek ini.</dd>

  <dt class="col-sm-3">About</dt>
  <dd class="col-sm-9">Merupakan Halaman tentang projek ini secara singkat, padat dan jelas.
  </dd>
</dl>
<!-- -->
</div>
<p class="text-warning font-weight-bold text-justify"> Note : Pastikan WebSever Lokal sudah terkoneksi ke Internet agar semua Link Icon, css, Javascript yang berada di CDN (<i>Online</i>) dapat di load sepenuhnya sehingga tampilan Web tidak bermasalah atau Normal.</p>
</div>
      <!---->
    </div>
  </div>
</div>
<!---->
<!-- FOOTER -->
  <footer class="container text-info ml-4 mb-5" style="position: absolute;">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2019 Smart Home, By Yoga. &middot; <a href="http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/privacy/">Privacy</a> &middot; <a href="http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/terms/">Terms</a></p>
  </footer>
<!---->
<script type="text/javascript">
  
var typed = new Typed('#typed',{
  strings : ['to the Features Page'],
  typeSpeed : 80,
  delaySpeed : 90,
  loop : false
});

</script>
<!---->

<script type="text/javascript" src="http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/particlesjs/particles.js"></script>
<script type="text/javascript" src="http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/particlesjs/app.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>