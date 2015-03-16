<?php
include('dbconnect.php');
 
$email = $_POST['email'];

$registration_id = rand(1000000, 2400000000);

$message = '<a href="http://.../register.php?id='.$registration_id.'">Click here</a>';

$sql = "INSERT INTO users (users_email, users_secureid) VALUES ('$email', '$registration_id')";
mysqli_query($mysqli, $sql);
mail($email, 'Registration', $message);

echo 'Mail has been sent';
?>