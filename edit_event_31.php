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
        $type = $_POST['type'];
        $path = $_FILES['media'];

        $target_dir = ($type == 'images') ? "images/" : "videos/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);

        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars(basename($_FILES["image"]["name"])). " has been uploaded.";

            // Prepare and bind SQL statement
            $stmt = $conn->prepare("INSERT INTO `media` (`type`,`path`) VALUES (?, ?)");
            $stmt->bind_param("ddsss", $type, $path);

            // Execute the statement
            if ($stmt->execute()) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $stmt->error;
            }

            // Close statement
            $stmt->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        
    }

    // Close connection
    $conn->close();
?>
