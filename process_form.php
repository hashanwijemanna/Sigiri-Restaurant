<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Sigiri";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

// Insert data into the database
$sql = "INSERT INTO feedbacks (full_name, email, feedback) VALUES ('$fullName', '$email', '$feedback')";

if ($conn->query($sql) === TRUE) {
    echo "Record added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
