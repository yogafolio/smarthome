<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
    <!-- Bootstrap CSS Offline-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Perticles JS CSS Offline-->
    <link rel="stylesheet" type="text/css" href="http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/particlesjs/style.css">
    <!-- Costum CSS Offline-->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Icon Logo Offline-->
    <link rel="shortcut icon" type="image/png" href="images/icon-logo.png">
    
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
    <a class="nav-link rounded" href="http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/features/">Features</a>
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
      <a class="nav-link active font-weight-bold mb-1" id="v-pills-home-tab" href="http://<?php
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
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
      <!---->
      <!--breadcumb-->
      <nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background-color: #00000000">
    <li class="breadcrumb-item"><a href="http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"></li>
  </ol>
</nav>
      <!--content-->
<div class="card border-success mb-3 bg-dark text-success d-inline-block mr-md-3 ml-4" style="min-width: 18rem;">
  <div class="card-header font-weight-bold">Last Update</div>
  <div class="card-body text-success">
    <h5 class="card-title">Suhu (<i>Temperature</i>)<br><br></h5>
    <img src="images/icons8-temperature-52.png" alt="temperature-icon" style="opacity: 0.7; margin-top: -20px;">
    <!--code php nampilin data-->
    <?php
    date_default_timezone_set('Asia/Jakarta');
$tgl = date("Y-m-d");
      $conn = new mysqli("localhost", "root", "", "security");
      if ($conn->connect_errno) {
        echo "Failed to connect to MySQL: " . $conn->connect_error;
      }
      
      $no = 1;
      $res = $conn->query("SELECT * FROM tempdata ORDER BY id DESC");
      while($no<2&&$row = $res->fetch_assoc()){
        $suhu = $row['suhu'];
        if ($suhu<30) {
echo '
    <p class="card-text display-4 d-inline">'.$row['suhu'].' &deg;C</p>';
}
else if ($suhu>29){
  echo '
    <p class="card-text display-4 d-inline text-danger">'.$row['suhu'].' &deg;C</p>';
}    
    $no++;
      }
      ?>
    
  </div>
</div>
<!-- -->
<div class="card mb-3 bg-dark text-success d-inline-block mr-md-3 ml-4" style="min-width: 18rem;">
  <div class="card-header font-weight-bold">Today</div>
  <div class="card-body text-success">
    <h5 class="card-title">Suhu (<i>Temperature</i>)<br></h5>
    <p class="card-text">Max : <span class="h4 font-weight-bold">
      <?php 

$query ="SELECT MAX(suhu) FROM tempdata where date='$tgl'";
$res =mysqli_query($conn,$query);
$data =mysqli_fetch_array($res);
$maxsuhu = $data['MAX(suhu)'];

if ($maxsuhu<30) {
echo $maxsuhu.' &deg;C';
}
else if ($maxsuhu>29){
  echo '<span class="d-inline text-danger">'.$maxsuhu.' &deg;C</span>';
}
 ?>

    </span> <i class="fas fa-arrow-up"></i></p>

 <p class="card-text">Min : <span class="h4 font-weight-bold">
   <?php 

$query ="SELECT MIN(suhu) FROM tempdata where date='$tgl'";
$res =mysqli_query($conn,$query);
$data =mysqli_fetch_array($res);
$minsuhu = $data['MIN(suhu)'];

if ($minsuhu<30) {
echo $minsuhu.' &deg;C';
}
else if ($minsuhu>29){
  echo '<span class="d-inline text-danger">'.$minsuhu.' &deg;C</span>';
}
 ?>
 </span> <i class="fas fa-arrow-down"></i></p>
  </div>
</div>
<!-- -->
<!-- -->
<div class="card mb-3 bg-dark text-success d-inline-block mr-md-3 ml-4" style="min-width: 18rem;">
  <div class="card-header font-weight-bold">Today</div>
  <div class="card-body text-success">
    <h5 class="card-title">Suhu (<i>Temperature</i>)<br></h5>
     
 <?php $query="SELECT AVG(suhu) FROM tempdata where date='$tgl'";
$res=mysqli_query($conn,$query);
$data=mysqli_fetch_array($res);
$avgsuhuformat=$data['AVG(suhu)'];
$avgsuhu=number_format($avgsuhuformat);
if ($avgsuhu<30) {
echo '<p class="card-text">Avg : <span class="h4 font-weight-bold"> '.$avgsuhu.' &deg;C</span></p>';}
else if ($avgsuhu>29){
  echo '<p class="card-text">Avg : <span class="h4 font-weight-bold text-danger"> '.$avgsuhu.' &deg;C</span></p>';
}
 ?>
 <p class="card-text">Average (Rata-Rata)</p>
  </div>
</div>
<!-- -->
<!-- -->
<div class="card border-warning mb-3 bg-dark text-warning d-inline-block mr-md-3 ml-4" style="min-width: 18rem;">
  <div class="card-header font-weight-bold">Last Update</div>
  <div class="card-body text-warning">
    <h5 class="card-title">Kelembapan (<i>Humidity</i>)<br><br></h5>
    <img src="images/icons8-humidity-52.png" alt="temperature-icon" style="opacity: 0.7; margin-top: -11px;">
    <?php 
echo '<p class="card-text display-4 d-inline">'.$row['lembap'].' %</p>'
     ?>
    
  </div>
</div>
<!---->

<div class="card mb-3 bg-dark text-warning d-inline-block mr-md-3 ml-4" style="min-width: 18rem;">
  <div class="card-header font-weight-bold">Today</div>
  <div class="card-body text-warning">
    <h5 class="card-title">Kelembapan (<i>Humidity</i>)</h5>
    <?php $query="SELECT MAX(lembap) FROM tempdata where date='$tgl'";
$res=mysqli_query($conn,$query);
$data=mysqli_fetch_array($res);
echo '
    <p class="card-text">Max : <span class="h4 font-weight-bold"> '.$data['MAX(lembap)'].' %</span> <i class="fas fa-arrow-up"></i></p>';?>
    <?php $query="SELECT MIN(lembap) FROM tempdata where date='$tgl'";
$res=mysqli_query($conn,$query);
$data=mysqli_fetch_array($res);
echo '
    <p class="card-text">Min : <span class="h4 font-weight-bold"> '.$data['MIN(lembap)'].' %</span> <i class="fas fa-arrow-down"></i></p>';?>
    </div>
</div>
<!-- -->
<div class="card mb-3 bg-dark text-warning d-inline-block mr-md-3 ml-4" style="min-width: 18rem;">
  <div class="card-header font-weight-bold">Today</div>
  <div class="card-body text-warning">
    <h5 class="card-title">Kelembapan (<i>Humidity</i>)</h5>
    <?php $query="SELECT AVG(lembap) FROM tempdata where date='$tgl'";
$res=mysqli_query($conn,$query);
$data=mysqli_fetch_array($res);
$avglembapformat=$data['AVG(lembap)'];
$avglembap=number_format($avglembapformat);
echo '
    <p class="card-text">Avg : <span class="h4 font-weight-bold"> '.$avglembap.' %</span></p>';?>
<p class="card-text">Average (Rata-Rata)</p>
    </div>
  </div>
  <!-- -->   
<p class="text-info font-weight-bold ml-4 mt-5"> Note : Halaman ini tidak menampilkan secara Live, hanya menampilkan nilai saat terakhir kali dimuat</p>
<!--akhir content-->
</div>
</div>
</div>

<!---->
<!-- FOOTER -->
  <footer class="container text-info ml-4 mb-5" style="position: relative;">
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
  strings : ['Back, Admin!','to User Interface (UI) Smart Home Monitoring and Control','to Internet Of Things (IOT) Project'],
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