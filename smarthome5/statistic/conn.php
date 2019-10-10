<?php
date_default_timezone_set('Asia/Jakarta');
$tgl = date("Y-m-d"); 
      $conn = new mysqli("localhost", "root", "", "security");
      if ($conn->connect_errno) {
        echo "Failed to connect to MySQL: " . $conn->connect_error;
      }
      ?>