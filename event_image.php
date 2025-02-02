<?php

    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $dbname = "event";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM `media`";
    $result = $conn->query($sql);

    $mediaItems = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $mediaItems[] = $row;
        }
    }
    $conn->close();
?>
