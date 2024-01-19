<?php
$host = "localhost";
$db = "votacion";
$user = "root";
$pass = "1234";
// Create connection
$conn = mysqli_connect($host, $user, $pass, $db);

header("Content-Type: text/plain");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "\n");
}
//echo "Connected successfully\n";
//mysqli_close($conn);
?>
