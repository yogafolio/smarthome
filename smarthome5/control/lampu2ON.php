<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
require_once("conn.php");
$sql = "UPDATE control SET relay2 = '1'";
mysqli_query($conn,$sql);
 ?>