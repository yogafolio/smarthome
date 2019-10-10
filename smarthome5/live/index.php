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
    <!-- Icon Logo -->
    <link rel="shortcut icon" type="image/png" href="http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/images/icon-logo.png">
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
    <!--awal auto refresh jquery -->
<script src="http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/datatables/jquery-1.12.0.min.js"></script>
<script type="text/javascript">
  $(document).ready( function(){
    nil();
    some_element();
    refreshSuhu();
    refreshLembap();
    refreshMAXsuhu();
    refreshMINsuhu();
    refreshMAXlembap();
    refreshMINlembap();
    refreshAVGsuhu();
    refreshAVGlembap();
    get20table();
    get20gastable();
  });
  function nil(){
      $('#nilais').load('http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/auto-refresh/nil.php', function(){
      setTimeout(nil, 1000);
    });
  }
  function some_element(){
      $('#some_element').load('http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/auto-refresh/nilaisuhu.php', function(){
      setTimeout(some_element, 1000);
    });
  }
  function refreshSuhu(){
      $('#refreshSuhu').load('http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/auto-refresh/getSuhu.php', function(){
      setTimeout(refreshSuhu, 1000);
    });
  }
  function refreshLembap(){
      $('#refreshLembap').load('http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/auto-refresh/getLembap.php', function(){
      setTimeout(refreshLembap, 1000);
    });
  }
   function refreshMAXsuhu(){
      $('#refreshMAXsuhu').load('http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/auto-refresh/getMAXsuhu.php', function(){
      setTimeout(refreshMAXsuhu, 1000);
    });
  }
  function refreshMINsuhu(){
      $('#refreshMINsuhu').load('http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/auto-refresh/getMINsuhu.php', function(){
      setTimeout(refreshMINsuhu, 1000);
    });
  }
function refreshMAXlembap(){
      $('#refreshMAXlembap').load('http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/auto-refresh/getMAXlembap.php', function(){
      setTimeout(refreshMAXlembap, 1000);
    });
  }
  function refreshMINlembap(){
      $('#refreshMINlembap').load('http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/auto-refresh/getMINlembap.php', function(){
      setTimeout(refreshMINlembap, 1000);
    });
  }
  function get20table(){
      $('#get20table').load('http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/auto-refresh/get20table.php', function(){
      setTimeout(get20table, 1000);
    });
  }
  function get20gastable(){
      $('#get20gastable').load('http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/auto-refresh/get20gastable.php', function(){
      setTimeout(get20gastable, 1000);
    });
  }
  function refreshAVGsuhu(){
      $('#refreshAVGsuhu').load('http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/auto-refresh/getAVGsuhu.php', function(){
      setTimeout(refreshMINlembap, 1000);
    });
  }
  function refreshAVGlembap(){
      $('#refreshAVGlembap').load('http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/auto-refresh/getAVGlembap.php', function(){
      setTimeout(refreshMINlembap, 1000);
    });
  }
</script>
<!--akhir auto refresh jquery -->
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
    <a class="nav-link rounded text-white" href="http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/" style="background-color: #007bff;">Live</a>
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
?>/smarthome5/features">Features</a>
  </li>
  <li class="nav-item font-weight-bold">
    <a class="nav-link rounded" href="http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/technology">Technology</a>
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
    <li class="breadcrumb-item active" aria-current="page">Live</li>
  </ol>
</nav>
      <!---->
      <div class="ml-4"> 
<div class="text-white mb-5">
<h2>Live - Real Time Data</h2>

<p class="h5" style="letter-spacing: 1px;">
Menampilkan data secara Real Time
</p>
</div>
</div>

<!--content-->

<div class="card border-success mb-3 bg-dark text-success d-inline-block mr-md-3 ml-4" style="min-width: 18rem;">
  <div class="card-header font-weight-bold">Last Update</div>
  <div class="card-body text-success">
    <h5 class="card-title">Suhu (<i>Temperature</i>)<br><br></h5>
    <img src="http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/images/icons8-temperature-52.png" alt="temperature-icon" style="opacity: 0.7; margin-top: -20px;">

    <p class="card-text display-4 d-inline"><span id="refreshSuhu"></span></p>
    
  </div>
</div>

<div class="card mb-3 bg-dark text-success d-inline-block mr-md-3 ml-4" style="min-width: 18rem;">
  <div class="card-header font-weight-bold">Today</div>
  <div class="card-body text-success">
    <h5 class="card-title">Suhu (<i>Temperature</i>)<br></h5>
    <p class="card-text">Max : <span class="h4 font-weight-bold"> <span id="refreshMAXsuhu"></span> <i class="fas fa-arrow-up text-info"></i></span> </p>
 
<p class="card-text">Min : <span class="h4 font-weight-bold"><span id="refreshMINsuhu"></span> <i class="fas fa-arrow-down text-info"></i></span></p>

  </div>
</div>
<!-- -->
<div class="card mb-3 bg-dark text-success d-inline-block mr-md-3 ml-4" style="min-width: 18rem;">
  <div class="card-header font-weight-bold">Today</div>
  <div class="card-body text-success">
    <h5 class="card-title">Suhu (<i>Temperature</i>)<br></h5>
     <p class="card-text">Avg : <span class="h4 font-weight-bold"><span id="refreshAVGsuhu"></span></span></p>
 <p class="card-text">Average (Rata-Rata)</p>
  </div>
</div>
<!-- -->
<!---->
<div class="card border-warning mb-3 bg-dark text-warning d-inline-block mr-md-3 ml-4" style="min-width: 18rem;">
  <div class="card-header font-weight-bold">Last Update</div>
  <div class="card-body text-warning">
    <h5 class="card-title">Kelembapan (<i>Humidity</i>)<br><br></h5>
    <img src="http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/images/icons8-humidity-52.png" alt="temperature-icon" style="opacity: 0.7; margin-top: -11px;">
   
<p class="card-text display-4 d-inline"><span id="refreshLembap"></span></p>
    
  </div>
</div>
<!---->

<div class="card mb-3 bg-dark text-warning d-inline-block mr-md-3 ml-4" style="min-width: 18rem;">
  <div class="card-header font-weight-bold">Today</div>
  <div class="card-body text-warning">
    <h5 class="card-title">Kelembapan (<i>Humidity</i>)</h5>
    
    <p class="card-text">Max : <span class="h4 font-weight-bold">  <span id="refreshMAXlembap"></span> <i class="fas fa-arrow-up text-info"></i></span></p>
    
    <p class="card-text">Min : <span class="h4 font-weight-bold">  <span id="refreshMINlembap"></span> <i class="fas fa-arrow-down text-info"></i></span></p>
  </div>
</div>
<!---->
<!-- -->
<div class="card mb-3 bg-dark text-warning d-inline-block mr-md-3 ml-4" style="min-width: 18rem;">
  <div class="card-header font-weight-bold">Today</div>
  <div class="card-body text-warning">
    <h5 class="card-title">Kelembapan (<i>Humidity</i>)</h5>
    <p class="card-text">Avg : <span class="h4 font-weight-bold"><span id="refreshAVGlembap"></span></span></p>
<p class="card-text">Average (Rata-Rata)</p>
    </div>
  </div>
  <!-- -->
<!---->
<div class="ml-4">
<h3 class="text-white">20 Data Suhu dan Kelembapan Terakhir</h3>
<!---->
<table class="table table-striped table-dark" style="width: 100%;">
  <thead>
    <tr>
      <th scope="col" class="text-center">No</th>
      <th scope="col" class="text-center">Suhu</th>
      <th scope="col" class="text-center">Kelembapan</th>
      <th scope="col" class="text-center">Tanggal &amp; Waktu</th>
    </tr>
  </thead>
  <tbody id="get20table">
    
  </tbody>
</table>
</div>
<!---->
<!---->
<div class="ml-4">
<h3 class="text-white">20 Data Gas Terakhir</h3>
<!---->
<table class="table table-striped table-dark" style="width: 100%;">
  <thead>
    <tr>
      <th scope="col" class="text-center">No</th>
      <th scope="col" class="text-center">Gas LPG</th>
      <th scope="col" class="text-center">Gas CO</th>
      <th scope="col" class="text-center">Gas Smoke</th>
      <th scope="col" class="text-center">Total (Rata-Rata)</th>
      <th scope="col" class="text-center">Tanggal &amp; Waktu</th>
    </tr>
  </thead>
  <tbody id="get20gastable">
    
  </tbody>
</table>
</div>
<!---->
      <!---->
    </div>
  </div>
</div>
<!---->
<!-- -->
<script src="http://<?php
//To Read File
$file = 'C:\xampp\htdocs\ip.txt';
$fp = fopen($file, 'r');
$data = fread($fp,filesize($file));
echo $data; 
?>/smarthome5/js/pure-knob-master/pureknob.js" type="text/javascript"></script>
    
    <script type="text/javascript">
      // <![CDATA[
      
      /*
       * Demo code for knob element.
       */
      function demoKnob() {
        // Create knob element, 300 x 300 px in size.
        var knob = pureknob.createKnob(300, 300);
        
        // Set properties.
        knob.setProperty('angleStart', -0.75 * Math.PI);
        knob.setProperty('angleEnd', 0.75 * Math.PI);
        knob.setProperty('colorFG', '#88ff88');
        knob.setProperty('trackWidth', 0.4);
        knob.setProperty('valMin', 0);
        knob.setProperty('valMax', 100);
        
        // Set initial value.
        var nil = document.getElementById('nilais').innerHTML;
        knob.setValue(nil);
        
        /*
         * Event listener.
         *
         * Parameter 'knob' is the knob object which was
         * actuated. Allows you to associate data with
         * it to discern which of your knobs was actuated.
         *
         * Parameter 'value' is the value which was set
         * by the user.
         */
        var listener = function(knob, value) {
          console.log(value);
        };
        
        knob.addListener(listener);
        
        // Create element node.
        var node = knob.node();
        
        // Add it to the DOM.
        var elem = document.getElementById('some_element');
        elem.appendChild(node);
      }
      
      
      
      /*
       * This is executed after the document finished loading.
       */
      function ready() {
        demoKnob();
      }

      document.addEventListener('DOMContentLoaded', ready, false);
      // ]]>
    </script>
  
  
    <div id="some_element"></div>
    <span id="nilais" class="text-white">

</span>
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
  strings : ['to the Live Page'],
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

    
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>