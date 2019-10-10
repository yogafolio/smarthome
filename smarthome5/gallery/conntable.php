<?php 
$conn = new mysqli("localhost", "root", "", "security");
      if ($conn->connect_errno) {
        echo "Failed to connect to MySQL: " . $conn->connect_error;
      }
 ?>