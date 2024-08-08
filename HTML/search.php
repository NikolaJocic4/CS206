<?php
// Include database configuration
include('../Database/dbconfig.php');

// Check if the search query parameter is set
if(isset($_POST['search'])) {
    // Sanitize the search query to prevent SQL injection
    $searchQuery = mysqli_real_escape_string($conn, $_POST['search']);

    // Construct the SQL query to search for reviews based on the search query
    $sql = "SELECT * FROM reviews WHERE name LIKE '%$searchQuery%' OR content LIKE '%$searchQuery%'";

    // Execute the query
    $result = $conn->query($sql);

    // Check if there are any results
    if ($result->num_rows > 0) {
        // Display each review
        while ($row = $result->fetch_assoc()) {
            echo '<h1 style="text-align: left; padding-bottom: 5vh;">' . $row['name'] . '</h1>';
            echo '<p class="review-paragraph">';
            echo substr($row['content'], 0, 200) . '...'; // Limit content to 200 characters
            echo '<br><br>';
            echo '<a href="ReviewOne.php?id=' . $row['id'] . '" class="link">Show More -></a>';
            echo '</p>';
        }
    } else {
        echo "No results found."; // If no results are found
    }
}
?>
