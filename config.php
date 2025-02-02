<?php
$host = "localhost";
$user = "root";  // Change if using a different user
$password = "";  // Default is empty for XAMPP
$database = "website_db"; // Ensure the correct database name

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
