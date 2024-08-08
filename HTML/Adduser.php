<?php
// Include your database configuration file
include('../Database/dbconfig.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize inputs
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Perform validation (you may add more validation as needed)

    // Insert user data into the database
    $sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";

    if (mysqli_query($conn, $sql)) {
        // Registration successful, set username in session and redirect to profile page
        session_start();
        $_SESSION['username'] = $username;
        header("Location: Profile.php");
        exit();
    } else {
        // Handle registration failure
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close database connection
    mysqli_close($conn);
} else {
    // Redirect if form is not submitted
    header("Location: Register.php");
    exit();
}
?>
