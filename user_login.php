<?php
// Include the database connection
include "db.php";

// Start session
session_start();

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validation
    if (empty($email) || empty($password)) {
        echo "Email and Password are required.";
        exit;
    }

    // Query user
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $user["password"])) {
            $_SESSION["user_id"] = $user["id"];
            $_SESSION["email"] = $email;
            echo "Login successful!";
            header("Location: dashboard.php");
            exit;
        } else {
            echo "Invalid email or password.";
        }
    } else {
        echo "No account found with this email.";
    }

    $stmt->close();
}

$conn->close();
?>
