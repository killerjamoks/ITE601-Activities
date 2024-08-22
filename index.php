<?php
$servername = "localhost";
$username = "username";
$password = "password";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error) {
	die("Connection Failed: " . $conn->connect_error);
}

echo "Connectec Successfully";

?>