<?php
// Include database configuration
include('../Database/dbconfig.php');

// Check if epoch is set
if (isset($_POST['epoch'])) {
    // Retrieve and sanitize the epoch
    $epoch = mysqli_real_escape_string($conn, $_POST['epoch']);

    // Construct SQL query to fetch reviews based on the selected epoch
    $sql = "SELECT r.* FROM reviews r JOIN art a ON r.art_name = a.art_name WHERE a.art_epoch = '$epoch'";

    // Fetch reviews based on the constructed SQL query
    $result = $conn->query($sql);

    // Display each review
    while ($row = $result->fetch_assoc()) {
        echo '<h1 style="text-align: left; padding-bottom: 5vh;">' . $row['name'] . '</h1>';
        echo '<p class="review-paragraph">';
        echo substr($row['content'], 0, 200) . '...'; // Limit content to 200 characters
        echo '<br><br>';
        echo '<a href="ReviewOne.php?id=' . $row['id'] . '" class="link">Show More -></a>';
        echo '</p>';
    }
    exit(); // Stop further execution of the PHP script after displaying reviews
}
?>
