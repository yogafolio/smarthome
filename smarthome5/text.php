<!--content-->
<div class="card border-success mb-3 bg-dark text-success d-inline-block mr-md-3 ml-4" style="min-width: 18rem;">
  <div class="card-header font-weight-bold">Last Update</div>
  <div class="card-body text-success">
    <h5 class="card-title">Suhu (<i>Temperature</i>)<br><br></h5>
    <img src="http://localhost/smarthome/images/icons8-temperature-52.png" alt="temperature-icon" style="opacity: 0.7; margin-top: -20px;">
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
        echo '
    <p class="card-text display-4 d-inline">'.$row['suhu'].' &deg;C</p>';
    $no++;
      }
      ?>
    
  </div>
</div>

<div class="card mb-3 bg-dark text-success d-inline-block mr-md-3 ml-4" style="min-width: 18rem;">
  <div class="card-header font-weight-bold">Today</div>
  <div class="card-body text-success">
    <h5 class="card-title">Suhu (<i>Temperature</i>)<br></h5>
    <?php $query="SELECT MAX(suhu) FROM tempdata where date='$tgl'";
$res=mysqli_query($conn,$query);
$data=mysqli_fetch_array($res);
echo '<p class="card-text">Max : <span class="h4 font-weight-bold"> '.$data['MAX(suhu)'].' &deg;C</span> <i class="fas fa-arrow-up"></i></p>';
 ?>
 <?php $query="SELECT MIN(suhu) FROM tempdata where date='$tgl'";
$res=mysqli_query($conn,$query);
$data=mysqli_fetch_array($res);
echo '<p class="card-text">Min : <span class="h4 font-weight-bold"> '.$data['MIN(suhu)'].' &deg;C</span> <i class="fas fa-arrow-down"></i></p>';
 ?>
  </div>
</div>

<!---->
<div class="card border-warning mb-3 bg-dark text-warning d-inline-block mr-md-3 ml-4" style="min-width: 18rem;">
  <div class="card-header font-weight-bold">Last Update</div>
  <div class="card-body text-warning">
    <h5 class="card-title">Kelembapan (<i>Humidity</i>)<br><br></h5>
    <img src="http://localhost/smarthome/images/icons8-humidity-52.png" alt="temperature-icon" style="opacity: 0.7; margin-top: -11px;">
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
<!---->