<?php
// membuat koneksi
$conn = mysqli_connect("localhost","root","","security");
if (!$conn) {
	die("connection failed : ". mysqli_connect_error());
}
 ?>