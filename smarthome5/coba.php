<?php
date_default_timezone_set('Asia/Jakarta');
$tgl = date("Y-m-d");
echo $tgl;
     $conn = new mysqli("localhost", "root", "", "security");
      if ($conn->connect_errno) {
        echo "Failed to connect to MySQL: " . $conn->connect_error;
      } 
$query="SELECT MAX(suhu) FROM tempdata where date = '$tgl'";
$res=mysqli_query($conn,$query);
$data=mysqli_fetch_array($res);
echo "Max suhu".$data['MAX(suhu)'];

//
$query="SELECT MAX(suhu) FROM tempdata";
$res=mysqli_query($conn,$query);
$data=mysqli_fetch_array($res);
echo "Max suhu".$data['MAX(suhu)'];
     ?>