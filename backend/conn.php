<?php 
// inilisiasi data
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "security";
// membuat koneksi
$conn = mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
	die("connection failed : ". mysqli_connect_error());
}
 ?>