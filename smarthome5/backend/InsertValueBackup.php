<?php 
header('Content-type: text/plain');

global $hum,$temp;
if ( $_GET['hum'] || $_GET['temp'])
 {
	$temp = $_GET['temp'];
	$hum = $_GET['hum'];
}
$con = mysqli_connect("localhost","root","","security");
date_default_timezone_set('Asia/Jakarta');
$Date = date("Y-m-d H:i:s");
$sql = "INSERT INTO tempdata(suhu, lembap, datetime, time, date)Values('".$temp."', '".$hum."', '".$Date."', '".$Date."', '".$Date."')";

if (!mysqli_query($con,$sql))
{
	die('Error: ' . mysqli_error($con));
} else
{
	echo "Data stored in database";
}

$sql = "SELECT snap, relay, batas FROM control";
$query = mysqli_connect($con,$sql);
$row = mysqli_num_rows($query,$sql);
if ($row)
{
	ehco "<";
	while ($row=mysqli_fetch_array($query))
	{
		echo $row['batas'];
	echo ">";
	}
} else {
	echo "<0>{0}[0]";
}
?>