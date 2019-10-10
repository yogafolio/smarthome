<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
require_once("conn.php");

$sql ="SELECT AVG(suhu) FROM tempdata where date='$tgl'";
$res =mysqli_query($conn,$sql);
$row =mysqli_fetch_array($res);
$avgsuhuformat = $row['AVG(suhu)'];
$avgsuhu = number_format($avgsuhuformat);

if ($avgsuhu<30) {
echo $avgsuhu.' &deg;C';
}
else if ($avgsuhu>29){
	echo '<p class="d-inline text-danger">'.$avgsuhu.' &deg;C</p>';
}
 ?>
