<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pi";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $options_query = $conn->query("SELECT * FROM `program`");
    $options = $options_query->fetch_all(MYSQLI_ASSOC);

    $conn->close();
?>
