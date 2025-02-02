<?php
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "event";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $date = $_POST['date'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $stmt = $conn->prepare("INSERT INTO `timeline` (`date`,`title`,`description`) VALUES (?,?,?)");
        $stmt->bind_param("sss", $date, $title, $description);

        if ($stmt->execute()) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . $stmt->error;
        }

        $stmt->close();

    }


$conn->close();
?>