<?php
// Database connection
include('../Database/dbconfig.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $title = $conn->real_escape_string($_POST['name']);
    $painting = $conn->real_escape_string($_POST['art_name']);
    $body = $conn->real_escape_string($_POST['body']);

    // Insert data into database
    // Insert data into database
$sql = "INSERT INTO reviews (name, art_name, content) VALUES ('$title', '$painting', '$body')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    // Redirect to Review.php after successful insertion
    header("Location: Review.php");
    exit(); // Stop further execution
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

// Close connection
$conn->close();
?>
