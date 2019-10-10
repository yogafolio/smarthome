<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
require_once("conntable.php");

$no = 1;
      $res = $conn->query("SELECT * FROM snap ORDER BY id DESC");
      while($no<2&&$row = $res->fetch_assoc()){
        echo $row['snap_link'];
        $no++;
      }
 ?>
