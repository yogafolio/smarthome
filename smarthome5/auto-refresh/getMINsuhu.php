<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
require_once("conn.php");

$sql ="SELECT MIN(suhu) FROM tempdata where date='$tgl'";
$res =mysqli_query($conn,$sql);
$row =mysqli_fetch_array($res);
$minsuhu = $row['MIN(suhu)'];

if ($minsuhu<30) {
echo $minsuhu.' &deg;C';
}
else if ($minsuhu>29){
	echo '<p class="d-inline text-danger">'.$minsuhu.' &deg;C</p>';
}
 ?>
