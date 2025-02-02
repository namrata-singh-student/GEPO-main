<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pi";

    $connection = new mysqli($servername, $username, $password, $dbname);

    if ($connection->connect_error) {
        die("Connection failed: ".$connection->connect_error);
    }
    
    $sql = "SELECT `location_lat` AS 'lat', `location_lng` AS 'lng', `title`, `description`, `images` FROM `u_map`";
    $result = $connection->query($sql);

    $markers = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $markers[] = [
            'location' => [(float)$row['lat'], (float)$row['lng']],
            'title' => $row['title'],
            'description' => $row['description'],
            'images' => [$row['images']]
            ];
        }
    }

    header('Content-Type: application/json');
    echo json_encode($markers);
?>