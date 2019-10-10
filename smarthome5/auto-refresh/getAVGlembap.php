<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
require_once("conn.php");

$sql ="SELECT * FROM tempdata ORDER BY id DESC LIMIT 1";
$res =mysqli_query($conn,$sql);
$row =mysqli_fetch_array($res);
$lembap = $row['lembap'];

echo $lembap.' %';
 ?>
