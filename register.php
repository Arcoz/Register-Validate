<?php 
include('dbconnect.php');

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "SELECT * FROM users WHERE users_secureid=".$id." AND users_registered='0'";
	$result = mysqli_query($mysqli, $sql);
	$row = mysqli_fetch_array($result);
	if ($row['users_secureid'] == $id) {
		$sql_update = "UPDATE users SET users_registered = '1' WHERE users_secureid = ".$id;
		mysqli_query($mysqli, $sql_update);
		echo '<p>registered</p>';
	} else {
		echo '<p>False ID given.</p>';
	}
	
} else {
	echo '<p>No id has been set.</p>';	
}

?>