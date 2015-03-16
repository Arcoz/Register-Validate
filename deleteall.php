<?php
include('dbconnect.php');

$sql = "DELETE FROM users WHERE users_registered=0";
$result = mysqli_query($mysqli, $sql);

?>