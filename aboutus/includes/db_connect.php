<?php
$host = 'localhost'; // Change if your database is on another server
$username = 'root';  // Your MySQL username
$password = '';      // Your MySQL password
$dbname = 'gepo';    // Name of your database

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
