<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
require_once("conn.php");

$sql ="SELECT * FROM tempdata ORDER BY id DESC LIMIT 1";
$res =mysqli_query($conn,$sql);
$row =mysqli_fetch_array($res);
$suhu = $row['suhu'];
if ($suhu<30) {
echo $suhu.' &deg;C';
}
else if ($suhu>29){
	echo '<p class="d-inline text-danger">'.$suhu.' &deg;C</p>';
}
 ?>
