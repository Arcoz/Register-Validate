<?php
include('dbconnect.php');
 
$email = $_POST['email'];

$registration_id = rand(1000000, 2400000000);

$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=utf8\r\n";
//Change to your email
$headers .= "From: email@yourdomain.com\r\n";
//Change to your link
$message = '<a href="http://.../register.php?id='.$registration_id.'">Click here</a>';

$sql = "INSERT INTO users (users_email, users_secureid) VALUES ('$email', '$registration_id')";
mysqli_query($mysqli, $sql);
mail($email, 'Registration', $message, $headers);

echo 'Mail has been sent';
?>