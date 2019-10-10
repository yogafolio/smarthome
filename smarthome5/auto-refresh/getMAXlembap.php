<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
require_once("conn.php");

$sql ="SELECT MAX(lembap) FROM tempdata where date='$tgl'";
$res =mysqli_query($conn,$sql);
$row =mysqli_fetch_array($res);
$maxlembap = $row['MAX(lembap)'];

echo $maxlembap.' %';

 ?>
