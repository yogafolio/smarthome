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
    <!-- Bootstrap CSS offline-->
    <link rel="stylesheet" href="http://localhost/smarthome/css/bootstrap.min.css">
    <!-- Perticles JS CSS offline-->
    <link rel="stylesheet" type="text/css" href="http://localhost/smarthome/particlesjs/style.css">
<!-- Fontawesome 4 CSS online-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Fontawesome 5 CSS online-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<!-- Bootstrap icon CSS online -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Costum CSS offline-->
    <link rel="stylesheet" type="text/css" href="http://localhost/smarthome/style.css">
    <!-- jquery datatables CSS offline-->
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
    <title>Smart Home - Monitoring dan Control</title>
    <!-- javasript Typed.JS CDN
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.8/typed.min.js"></script>-->

<!-- javasript Typed.JS Offline -->
    <script src="http://localhost/smarthome/js/typedjs/typed.min.js"></script>
   
  </head>
  <body class="bg-dark">
<div id="particles-js"></div>
    <header style="max-height: 130px; position: relative;"> 
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
    <a class="nav-link rounded" href="http://localhost/smarthome/">Live</a>
  </li>
  <li class="nav-item font-weight-bold">
    <a class="nav-link rounded" href="#">Gallery</a>
  </li>
  <li class="nav-item font-weight-bold">
    <a class="nav-link rounded" href="">Camera</a>
  </li>
  <li class="nav-item font-weight-bold">
    <a class="nav-link rounded" href="http://localhost/smarthome/features">Features</a>
  </li>
  <li class="nav-item font-weight-bold">
    <a class="nav-link rounded" href="http://localhost/smarthome/technology">Technology</a>
  </li>
  <li class="nav-item font-weight-bold">
    <a class="nav-link rounded" href="http://localhost/smarthome/about/">About</a>
  </li>
  
</ul>
</nav>
<div class="row1" style="height: 415px">
  <div class="col-3 pl-2">
   <div class="nav flex-column nav-pills ml-5 mt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link font-weight-bold mb-1" id="v-pills-home-tab" href="http://localhost/smarthome/" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-home" style='font-size:17px'></i> Home</a>
      <a class="nav-link active font-weight-bold mb-1" id="v-pills-profile-tab" href="http://localhost/smarthome/table/" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-table" style='font-size:17px'></i> Table</a>
      <a class="nav-link font-weight-bold mb-1" id="v-pills-messages-tab" href="http://localhost/smarthome/statistic/" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="far fa-chart-bar" style='font-size:17px'></i> Statistic</a>
      <a class="nav-link font-weight-bold mb-1" id="v-pills-settings-tab" href="http://localhost/smarthome/lamp-control/" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="glyphicon glyphicon-lamp" style='font-size:17px'></i> Lamp Control</a>
      <a class="nav-link font-weight-bold mb-1" id="v-pills-settings-tab" href="http://localhost/smarthome/capture-image/" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class='far fa-images' style='font-size:17px'></i> Capture Image</a>
      <a class="nav-link font-weight-bold mb-1" id="v-pills-settings-tab" href="http://localhost/smarthome/cctv/" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-video-camera" style='font-size:17px'></i> CCTV</a>
    </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
      <!---->
      <!---->
      <nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background-color: #00000000">
    <li class="breadcrumb-item"><a href="http://localhost/smarthome/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Table</li>
  </ol>
</nav>
      <!---->
<!---->

<h3 class="text-white">Semua Tabel Data Suhu dan Kelembapan</h3>
<table id="dataTables" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>NO.</th>
                <th>SUHU</th>
                <th>KELEMBAPAN</th>
                <th>TANGGAL &amp; WAKTU</th>
                
            </tr>
        </thead>
    
    <tbody>
      <?php
      $conn = new mysqli("localhost", "root", "", "security");
      if ($conn->connect_errno) {
        echo "Failed to connect to MySQL: " . $conn->connect_error;
      }
      
      $no = 1;
      $res = $conn->query("SELECT * FROM tempdata ORDER BY id DESC");
      while($no<=10&&$row = $res->fetch_assoc()){
        echo '
        <tr>
          <td>'.$no.'</td>
          <td>'.$row['suhu'].' &deg; C</td>
          <td>'.$row['lembap'].' %</td>
          <td>'.$row['date'].'</td>
          
        </tr>
        ';
        $no++;
      }
      ?>
    </tbody>
    <tfoot>
            <tr>
                <th>NO.</th>
                <th>ID</th>
                <th>NAME</th>
                <th>OPTION 1</th>
                
            </tr>
        </tfoot>
  </table>
  <!--akhir tabel-->
  <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
  <script>
  $(document).ready( function () {
    $('#dataTables').DataTable();
} );
  </script>
    </div>
  </div>
</div>
<!---->
<!-- FOOTER -->
  <footer class="container text-info" style="position: absolute;">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2019 Smart Home, By Yoga. &middot; <a href="http://localhost/smarthome/privacy/">Privacy</a> &middot; <a href="http://localhost/smarthome/terms/">Terms</a></p>
  </footer>
<!---->
<!---->
<script type="text/javascript">
  
var typed = new Typed('#typed',{
  strings : ['to the Temperature and Humidity Table'],
  typeSpeed : 80,
  delaySpeed : 90,
  loop : false
});

</script>
<!--javascript data tables jquery-->
<!--akhir-javascript data tables jquery -->
<!--awal typed.js -->
<script type="text/javascript" src="http://localhost/smarthome/particlesjs/particles.js"></script>
<script type="text/javascript" src="http://localhost/smarthome/particlesjs/app.js"></script>
<!--akhir typed.js -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>