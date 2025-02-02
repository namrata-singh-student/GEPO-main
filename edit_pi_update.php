<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "pi";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title_id = $_POST['title_id'];
    $description = $_POST['description'];

    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $upload_dir = 'images/'; // Ensure this directory exists and is writable
        $file_name = basename($_FILES['image']['name']);
        $target_file = $upload_dir . uniqid() . '_' . $file_name;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            // Prepare SQL statement to update the record
            $stmt = $conn->prepare("UPDATE `program` SET `description`=?, `image`=? WHERE `sl`=?");
            $stmt->bind_param("ssi", $description, $target_file, $title_id);

            if ($stmt->execute()) {
                echo "Record updated successfully.";
            } else {
                echo "Error updating record: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "No file uploaded or there was an upload error.";
    }
}

$conn->close();
?>
