<!DOCTYPE html>
<html>
<head>
	<title>json belajar</title>
</head>
<body>
<?php  
$conn=mysqli_connect("localhost","root","","security");

$sql="SELECT suhu FROM tempdata LIMIT 10";
$query=mysqli_query($conn,$sql);
$mmm = array('suhu' => $conn,$sql );
//  $no=1;
// while ($row1=mysqli_fetch_assoc($query)
//  ) {
// 	echo $no.'_'.$row['suhu'].'<br>';
// $no++;	
// }
// $row1=mysqli_fetch_assoc($query);
echo $mmm;


// $no++;



// $no=1;
// while ($row=mysqli_fetch_array($query)
// ) {
// 	echo $no.'_'.$row['suhu'].'<br>';
// $no++;	
// }
?>

</body>
</html>
