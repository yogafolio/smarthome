<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
require_once("conn.php");

$sql ="SELECT AVG(lembap) FROM tempdata where date='$tgl'";
$res =mysqli_query($conn,$sql);
$row =mysqli_fetch_array($res);
$avglembapformat = $row['AVG(lembap)'];
$avglembap = number_format($avglembapformat);

echo $avglembap.' %';

 ?>
