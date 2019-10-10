<?php 
header('Content-type: text/plain');

global $total,$smoke,$co,$lpg;
if ( $_GET['total'] || $_GET['smoke']|| $_GET['co']|| $_GET['lpg'])
 {
	$lpg = $_GET['lpg'];
	$co = $_GET['co'];
	$smoke = $_GET['smoke'];
	$total = $_GET['total'];
}
$con = mysqli_connect("localhost","root","","security");
date_default_timezone_set('Asia/Jakarta');
$Date = date("Y-m-d H:i:s");
$sql = "INSERT INTO gasdata(lpg, co, smoke, total, datetime, date, time)Values('".$lpg."', '".$co."', '".$smoke."', '".$total."', '".$Date."', '".$Date."', '".$Date."')";

if (!mysqli_query($con,$sql))
{
	die('Error: ' . mysqli_error($con));
} else
{
	echo "Data stored in database";
}

?>