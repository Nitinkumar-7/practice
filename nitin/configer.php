<?php 
$conn =mysql_connect("localhost","root","","student");

//check connection
if ($conn->connect_error) {
	die("connection failed: " . $conn->connect_error);
}
else{
	echo "connected sucessfully";
}


 ?>