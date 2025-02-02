<?php
require 'config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, username, password FROM admins WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($row = $result->fetch_assoc()) {
        if (password_verify($password, $row['password'])) {
            $_SESSION['admin_id'] = $row['id'];
            $_SESSION['admin_username'] = $row['username'];

            // Redirect to the admin dashboard
            header("Location: admin_dashboard.php");
            exit();
        } else {
            echo "<script>alert('Invalid password'); window.location.href='admin_login.html';</script>";
        }
    } else {
        echo "<script>alert('Admin not found'); window.location.href='admin_login.html';</script>";
    }

    $stmt->close();
}
?>
