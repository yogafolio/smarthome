<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
require_once("conn.php");

date_default_timezone_set('Asia/Jakarta')
$target_path = "hasil-capture/";
	
	$filename = date("YmdHis").'.jpg';
	$filejpg = sprintf("%s",$filename);

	$target_path = $target_path . basename($filename);

	if (moveupload_file($_FILES['picture']['tmp_name'],$target_path)) {
		echo "The file". basename( $_FILES['picture']['name'])." has been uploaded";
		$sql = "INSERT INTO snap (snap_link) VALUES ('".$filejpg."')";
		mysqli_query($conn, $sql);
	}
	else {
		echo "There was an error uploading the file, please try again!"
	}

	$sql = "UPDATE control SET motion = '1', snap = '0'";
	mysqli_query($conn,$sql);
 ?>