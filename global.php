<?php
// Database connection
$host = "localhost";
$dbname = "global_partnerships";
$username = "root";
$password = ""; // Default password for XAMPP is empty

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Insert Data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $organization = $_POST["organization"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $partnershipType = $_POST["partnership-type"];
    $message = $_POST["message"];

    $sql = "INSERT INTO partnerships (organization, contact, email, partnership_type, message) VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    
    try {
        $stmt->execute([$organization, $contact, $email, $partnershipType, $message]);
        echo "Form submitted successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
