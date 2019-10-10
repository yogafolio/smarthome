<?php 
header('Content-type: text/plain');

global $hum,$temp,$total,$smoke,$co,$lpg;
if ( $_GET['hum'] || $_GET['temp'] || $_GET['total'] || $_GET['smoke']|| $_GET['co']|| $_GET['lpg'])
 {
	$lpg = $_GET['lpg'];
	$co = $_GET['co'];
	$smoke = $_GET['smoke'];
	$total = $_GET['total'];
	$temp = $_GET['temp'];
	$hum = $_GET['hum'];
}
$con = mysqli_connect("localhost","root","","security");
date_default_timezone_set('Asia/Jakarta');
$Date = date("Y-m-d H:i:s");
$sql = "INSERT INTO tempdata(suhu, lembap, datetime, time, date)Values('".$temp."', '".$hum."', '".$Date."', '".$Date."', '".$Date."')";
$sql2 = "INSERT INTO gasdata(lpg, co, smoke, total, datetime, date, time)Values('".$lpg."', '".$co."', '".$smoke."', '".$total."', '".$Date."', '".$Date."', '".$Date."')";
if (!mysqli_query($con,$sql))
{
	die('Error: ' . mysqli_error($con));
} else
{
	echo "'DHT11'Data stored in database and";
}
if (!mysqli_query($con,$sql2))
{
	die('Error: ' . mysqli_error($con));
} else
{
	echo "'MQ-2'Data stored in database";
}
?>