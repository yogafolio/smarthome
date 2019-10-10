<?php  
 $conn = new mysqli("localhost", "root", "", "security");
    
$no = 1;
      $res = $conn->query("SELECT * FROM tempdata ORDER BY id DESC");
      while($no<2&&$row = $res->fetch_assoc()){
        echo $row['suhu'];
    $no++;
      }
      ?>