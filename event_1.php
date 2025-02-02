<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "event";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: ".$conn->connect_error);
    }

    $sql = "SELECT * FROM `timeline` ORDER BY STR_TO_DATE(`date`, '%M %d, %Y')";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<h3>" . htmlspecialchars($row['date']) . "</h3>";
            echo "<li>";
            echo "<div><div><h2>" . htmlspecialchars($row['title']) . "</h2></div>";
            echo "<p>" . htmlspecialchars($row['description']) . "</p></div></li>";
        }
    }
    else {
        echo "0 results";
    }

?>