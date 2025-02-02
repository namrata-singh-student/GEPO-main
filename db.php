<?php
// Database configuration
$host = "localhost"; // Replace with your database host
$username = "root";  // Replace with your database username
$password = "";      // Replace with your database password
$dbname = "user_management"; // Replace with your database name

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optional: Enable UTF-8 encoding
$conn->set_charset("utf8");

// Uncomment this to debug connection issues
// echo "Connected successfully!";
?>
