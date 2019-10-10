<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
require_once("conn.php");

$sql = "SELECT * FROM control";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($res);
$lampu1 = $row['relay2'];

if ($lampu1 == 0) {
	echo '<span class="text-info"><i class="far fa-lightbulb"></i> Tidak Aktif</span>';
}else {
	echo '<span class="text-info"><i class="fas fa-lightbulb"></i> Aktif</span>';
}
 ?>