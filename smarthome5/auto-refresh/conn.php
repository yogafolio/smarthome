<?php
date_default_timezone_set('Asia/Jakarta');
$tgl = date("Y-m-d"); 
// membuat koneksi
$conn = mysqli_connect("localhost","root","","security");
if (!$conn) {
	die("connection failed : ". mysqli_connect_error());
}
 ?>