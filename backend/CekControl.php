<?php 	
error_reporting(E_ALL ^ E_DEPRECATED);
$con=mysqli_connect("localhost","root","","security");
$sql ="SELECT * FROM control";
$query =mysqli_query($con,$sql);
$row=mysqli_num_rows($query);
if ($row)
{
	echo "<";
	while($row=mysqli_fetch_array($query))
	{
		echo $row['snap'];
		echo $row['relay1'];
		echo $row['relay2'];
	}
	echo ">";
} else {
	echo "<0000>";
}

 ?>