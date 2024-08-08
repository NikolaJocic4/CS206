<?php
// Include database configuration
include('../Database/dbconfig.php');

// Fetch all reviews from the database
$sql = "SELECT * FROM reviews";
$result = $conn->query($sql);

// Check if there are any reviews
if ($result->num_rows > 0) {
    // Output reviews in HTML format
    while ($row = $result->fetch_assoc()) {
        echo '<h1 style="text-align: left; padding-bottom: 5vh;">' . $row['name'] . '</h1>';
        echo '<p class="review-paragraph">';
        echo substr($row['content'], 0, 200) . '...'; // Limit content to 200 characters
        echo '<br><br>';
        echo '<a href="ReviewOne.php?id=' . $row['id'] . '" class="link">Show More -></a>';
        echo '</p>';
    }
} else {
    echo "No reviews found.";
}
?>
