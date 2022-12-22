<?php
$host = "localhost";
$userName = "web";
$password = "web";
$dbName = "web";
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>
