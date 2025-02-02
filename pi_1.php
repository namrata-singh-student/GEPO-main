<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pi";

    $connection = new mysqli($servername, $username, $password, $dbname);

    if ($connection->connect_error) {
        die("Connection failed: ".$connection->connect_error);
    }

    $query1 = "SELECT * FROM `program` WHERE `title` = 'Study Abroad Programs'";
    $result1 = $connection->query($query1) ;
    $row1 = $result1->fetch_assoc() ;
    $title1 = $row1['title'];
    $description1 = $row1['description'];
    $image1 = $row1['image'];
    
    $query2 = "SELECT * FROM `program` WHERE `title` = 'Faculty & Research Exchange'";
    $result2 = $connection->query($query2);
    $row2 = $result2->fetch_assoc();
    $title2 = $row2['title'];
    $description2 = $row2['description'];
    $image2 = $row2['image'];

    $query3 = "SELECT * FROM `program` WHERE `title` = 'Short-term Study Tours'";
    $result3 = $connection->query($query3);
    $row3 = $result3->fetch_assoc();
    $title3 = $row3['title'];
    $description3 = $row3['description'];
    $image3 = $row3['image'];

    $query4 = "SELECT * FROM `program` WHERE `title` = 'Internships and Work Placements'";
    $result4 = $connection->query($query4);
    $row4 = $result4->fetch_assoc();
    $title4 = $row4['title'];
    $description4 = $row4['description'];
    $image4 = $row4['image'];

    $connection->close();
?>