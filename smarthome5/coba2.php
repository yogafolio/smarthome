<?php  
 $conn = new mysqli("localhost", "root", "", "security");
      if ($conn->connect_errno) {
        echo "Failed to connect to MySQL: " . $conn->connect_error;
      }
$no = 1;
      $res = $conn->query("SELECT * FROM tempdata ORDER BY id DESC");
      while($no<2&&$row = $res->fetch_assoc()){
        echo $row['suhu'];
    $no++;
      }
      ?>