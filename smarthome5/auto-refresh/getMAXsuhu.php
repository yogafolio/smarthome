<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
require_once("conn.php");

$sql ="SELECT MAX(suhu) FROM tempdata where date='$tgl'";
$res =mysqli_query($conn,$sql);
$row =mysqli_fetch_array($res);
$maxsuhu = $row['MAX(suhu)'];

if ($maxsuhu<30) {
echo $maxsuhu.' &deg;C';
}
else if ($maxsuhu>29){
	echo '<p class="d-inline text-danger">'.$maxsuhu.' &deg;C</p>';
}
 ?>
