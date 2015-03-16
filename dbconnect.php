<?php
//$mysqli = new mysqli("example.com", "user", "password", "database");
//Change all CHANGE inputs
$mysqli = new mysqli("localhost", "CHANGE", "CHANGE", "CHANGE");
//check connection:
if (mysqli_connect_errno()) {
	 //printf("Connect failed: %s\n", mysqli_connect_error());
	 exit();
}else{
	//printf("Forbindelsen OK"); 
}
?>