<?php

$servername = "localhost"; // Replace with your MySQL server name or IP address
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "Beauwebsite"; // Replace with your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
