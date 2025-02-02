<?php
require 'config.php'; // Ensure this is the correct path

if (!isset($conn)) {
    die(json_encode(["error" => "Database connection failed."]));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Encrypt password

    $stmt = $conn->prepare("INSERT INTO admins (username, email, password) VALUES (?, ?, ?)");

    if (!$stmt) {
        die(json_encode(["error" => "Database query failed: " . $conn->error]));
    }

    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
        echo json_encode(["message" => "Admin registered successfully"]);
    } else {
        echo json_encode(["error" => "Registration failed: " . $stmt->error]);
    }

    $stmt->close();
}
?>
