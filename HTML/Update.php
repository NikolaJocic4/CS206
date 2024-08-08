<?php
include('../Database/dbconfig.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate input fields (you may add more validation as needed)
    $review_id = $_POST['review_id'];
    $name = $_POST['name'];
    $art_name = $_POST['art_name'];
    $content = $_POST['content'];

    // Update review data in the database
    $sql = "UPDATE reviews SET name = '$name', art_name = '$art_name', content = '$content' WHERE id = $review_id";

    if ($conn->query($sql) === TRUE) {
        // Redirect to Profile.php after successful update
        header("Location: Profile.php");
        exit();
    } else {
        // Handle update failure
        echo "Error updating review: " . $conn->error;
    }

    // Close database connection
    $conn->close();
} else {
    // Redirect if form is not submitted
    header("Location: Profile.php");
    exit();
}
?>
