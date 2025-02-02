<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "contact_form";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data and sanitize
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $college = $conn->real_escape_string($_POST['college']);
    $course = $conn->real_escape_string($_POST['course']);
    $stream = $conn->real_escape_string($_POST['stream']);
    $comments = $conn->real_escape_string($_POST['comments']);

    // Insert into database
    $sql = "INSERT INTO submissions (name, email, phone, college, course, stream, comments) 
            VALUES ('$name', '$email', '$phone', '$college', '$course', '$stream', '$comments')";

    if ($conn->query($sql) === TRUE) {
        echo "<h1>Thank You, $name!</h1>";
        echo "<p>Your details have been successfully submitted.</p>";
        echo "<a href='index.php'>Go Back</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
} else {
    echo "Invalid request.";
}
?>

