<?php
$servername = "localhost";
$username ="root";
$password ="12345678";
$db="dbunad17";
// Create connection
$conn = mysqli_connect($servername,$username, $password,$db);
// Check connection
if (!$conn) {
die("Connection failed: " .mysqli_connect_error());
}
echo "Connected successfully";
?>